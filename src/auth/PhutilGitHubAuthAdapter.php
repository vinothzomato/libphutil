<?php

/**
 * Authentication adapter for Github OAuth2.
 */
final class PhutilGitHubAuthAdapter extends PhutilOAuthAuthAdapter {

  public function getAdapterType() {
    return 'github';
  }

  public function getAdapterDomain() {
    return 'github.com';
  }

  public function getAccountID() {
    return $this->getOAuthAccountData('id');
  }

  public function getAccountEmail() {
    return $this->getOAuthAccountData('email');
  }

  public function getAccountName() {
    return $this->getOAuthAccountData('login');
  }

  public function getAccountImageURI() {
    return $this->getOAuthAccountData('avatar_url');
  }

  public function getAccountURI() {
    $name = $this->getAccountName();
    if (strlen($name)) {
      return 'https://github.com/'.$name;
    }
    return null;
  }

  public function getAccountRealName() {
    return $this->getOAuthAccountData('name');
  }

  protected function getAuthenticateBaseURI() {
    return 'https://github.com/login/oauth/authorize';
  }

  protected function getTokenBaseURI() {
    return 'https://github.com/login/oauth/access_token';
  }

  protected function loadOAuthAccountData() {
    $uri = new PhutilURI('https://api.github.com/user');
    $uri->setQueryParam('access_token', $this->getAccessToken());

    $future = new HTTPSFuture($uri);

    // NOTE: GitHub requires a User-Agent string.
    $future->addHeader('User-Agent', __CLASS__);

    list($body) = $future->resolvex();

    $uri = new PhutilURI('https://api.github.com/user/emails');
    $uri->setQueryParam('access_token', $this->getAccessToken());

    $future = new HTTPSFuture($uri);

    // NOTE: GitHub requires a User-Agent string.
    $future->addHeader('User-Agent', __CLASS__);

    list($emails_body) = $future->resolvex();

    try{
      $oauthData = phutil_json_decode($body);
      $emails = phutil_json_decode($emails_body);
      foreach ($emails as $email_result){
        if ($email_result['verified'] && strpos($email_result['email'],'@zomato.com') !== false) { // hardcoded for zomato
          $oauthData['email'] = $email_result['email'];
          break;
        }
      }
      return $oauthData;
    } catch (PhutilJSONParserException $ex) {
      throw new PhutilProxyException(
        pht('Expected valid JSON response from GitHub account data request.'),
        $ex);
    }
  }

}
