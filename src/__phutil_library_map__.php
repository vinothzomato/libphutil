<?php

/**
 * This file is automatically generated. Use 'phutil_mapper.php' to rebuild it.
 * @generated
 */

phutil_register_library_map(array(
  'class' =>
  array(
    'AbstractDirectedGraph' => 'utils/abstractgraph',
    'AbstractDirectedGraphTestCase' => 'utils/abstractgraph/__tests__',
    'CommandException' => 'future/exec',
    'ConduitClient' => 'conduit/client',
    'ConduitClientException' => 'conduit/client',
    'ConduitFuture' => 'conduit/client',
    'ExecFuture' => 'future/exec',
    'FileFinder' => 'filesystem/filefinder',
    'FileList' => 'filesystem/filelist',
    'Filesystem' => 'filesystem',
    'FilesystemException' => 'filesystem',
    'Future' => 'future',
    'FutureIterator' => 'future',
    'FutureProxy' => 'future/proxy',
    'HTTPFuture' => 'future/http',
    'HTTPSFuture' => 'future/https',
    'ImmediateFuture' => 'future/immediate',
    'LinesOfALargeFile' => 'filesystem/linesofalargefile',
    'MFilterTestHelper' => 'utils/__tests__',
    'PhutilConsoleFormatter' => 'console',
    'PhutilDaemon' => 'daemon/base',
    'PhutilDaemonOverseer' => 'daemon/overseer',
    'PhutilDefaultSyntaxHighlighter' => 'markup/syntax/highlighter/default',
    'PhutilDefaultSyntaxHighlighterEngine' => 'markup/syntax/engine/default',
    'PhutilDefaultSyntaxHighlighterEnginePygmentsFuture' => 'markup/syntax/highlighter/pygments/future',
    'PhutilDefaultSyntaxHighlighterEngineTestCase' => 'markup/syntax/engine/default/__tests__',
    'PhutilDivinerSyntaxHighlighter' => 'markup/syntax/highlighter/diviner',
    'PhutilDocblockParser' => 'parser/docblock',
    'PhutilDocblockParserTestCase' => 'parser/docblock/__tests__',
    'PhutilErrorHandler' => 'error',
    'PhutilExcessiveServiceCallsDaemon' => 'daemon/torture/excessiveservicecalls',
    'PhutilFatalDaemon' => 'daemon/torture/fatal',
    'PhutilHangForeverDaemon' => 'daemon/torture/hangforever',
    'PhutilInteractiveEditor' => 'console/editor',
    'PhutilJSON' => 'parser/json',
    'PhutilMarkupEngine' => 'markup/engine',
    'PhutilMissingSymbolException' => 'symbols/exception/missing',
    'PhutilNiceDaemon' => 'daemon/torture/nice',
    'PhutilProcessGroupDaemon' => 'daemon/torture/processgroup',
    'PhutilPygmentsSyntaxHighlighter' => 'markup/syntax/highlighter/pygments',
    'PhutilReadableSerializer' => 'readableserializer',
    'PhutilRemarkupBlockStorage' => 'markup/engine/remarkup/blockstorage',
    'PhutilRemarkupEngine' => 'markup/engine/remarkup',
    'PhutilRemarkupEngineBlockRule' => 'markup/engine/remarkup/blockrule/base',
    'PhutilRemarkupEngineRemarkupCodeBlockRule' => 'markup/engine/remarkup/blockrule/remarkupcode',
    'PhutilRemarkupEngineRemarkupDefaultBlockRule' => 'markup/engine/remarkup/blockrule/remarkupdefault',
    'PhutilRemarkupEngineRemarkupHeaderBlockRule' => 'markup/engine/remarkup/blockrule/remarkupheader',
    'PhutilRemarkupEngineRemarkupInlineBlockRule' => 'markup/engine/remarkup/blockrule/remarkupinline',
    'PhutilRemarkupEngineRemarkupListBlockRule' => 'markup/engine/remarkup/blockrule/remarkuplist',
    'PhutilRemarkupEngineRemarkupNoteBlockRule' => 'markup/engine/remarkup/blockrule/remarkupnote',
    'PhutilRemarkupEngineRemarkupQuotesBlockRule' => 'markup/engine/remarkup/blockrule/remarkupquotes',
    'PhutilRemarkupEngineTestCase' => 'markup/engine/remarkup/__tests__',
    'PhutilRemarkupRule' => 'markup/engine/remarkup/markuprule/base',
    'PhutilRemarkupRuleBold' => 'markup/engine/remarkup/markuprule/bold',
    'PhutilRemarkupRuleEscapeHTML' => 'markup/engine/remarkup/markuprule/escapehtml',
    'PhutilRemarkupRuleEscapeRemarkup' => 'markup/engine/remarkup/markuprule/escaperemarkup',
    'PhutilRemarkupRuleHyperlink' => 'markup/engine/remarkup/markuprule/hyperlink',
    'PhutilRemarkupRuleItalic' => 'markup/engine/remarkup/markuprule/italics',
    'PhutilRemarkupRuleLinebreaks' => 'markup/engine/remarkup/markuprule/linebreaks',
    'PhutilRemarkupRuleMonospace' => 'markup/engine/remarkup/markuprule/monospace',
    'PhutilSaturateStdoutDaemon' => 'daemon/torture/saturatestdout',
    'PhutilServiceProfiler' => 'serviceprofiler',
    'PhutilSymbolLoader' => 'symbols',
    'PhutilSyntaxHighlighter' => 'markup/syntax/highlighter/base',
    'PhutilSyntaxHighlighterEngine' => 'markup/syntax/engine/base',
    'PhutilTortureTestDaemon' => 'daemon/torture/base',
    'PhutilURI' => 'parser/uri',
    'PhutilUTF8TestCase' => 'utils/__tests__',
    'PhutilUtilsTestCase' => 'utils/__tests__',
    'PhutilXHPASTSyntaxHighlighter' => 'markup/syntax/highlighter/xhpast',
    'TempFile' => 'filesystem/tempfile',
    'TestAbstractDirectedGraph' => 'utils/abstractgraph/__tests__',
    'XHPASTNode' => 'parser/xhpast/api/node',
    'XHPASTNodeList' => 'parser/xhpast/api/list',
    'XHPASTSyntaxErrorException' => 'parser/xhpast/api/exception',
    'XHPASTToken' => 'parser/xhpast/api/token',
    'XHPASTTree' => 'parser/xhpast/api/tree',
    'XHPASTTreeTestCase' => 'parser/xhpast/api/tree/__tests__',
  ),
  'function' =>
  array(
    'Futures' => 'future',
    'array_mergev' => 'utils',
    'array_select_keys' => 'utils',
    'coalesce' => 'utils',
    'csprintf' => 'xsprintf/csprintf',
    'exec_manual' => 'future/exec',
    'execx' => 'future/exec',
    'head' => 'utils',
    'id' => 'utils',
    'idx' => 'utils',
    'ifilter' => 'utils',
    'igroup' => 'utils',
    'ipull' => 'utils',
    'isort' => 'utils',
    'jsprintf' => 'xsprintf/jsprintf',
    'mfilter' => 'utils',
    'mgroup' => 'utils',
    'mpull' => 'utils',
    'msort' => 'utils',
    'newv' => 'utils',
    'nonempty' => 'utils',
    'phlog' => 'error',
    'phutil_console_confirm' => 'console',
    'phutil_console_format' => 'console',
    'phutil_console_prompt' => 'console',
    'phutil_console_wrap' => 'console',
    'phutil_deprecated' => 'moduleutils',
    'phutil_error_listener_example' => 'error',
    'phutil_escape_html' => 'markup',
    'phutil_escape_uri' => 'markup',
    'phutil_get_library_name_for_root' => 'moduleutils',
    'phutil_get_library_root' => 'moduleutils',
    'phutil_get_library_root_for_path' => 'moduleutils',
    'phutil_is_utf8' => 'utils',
    'phutil_passthru' => 'future/exec',
    'phutil_render_tag' => 'markup',
    'phutil_utf8_shorten' => 'utils',
    'phutil_utf8_strlen' => 'utils',
    'phutil_utf8ize' => 'utils',
    'phutil_utf8v' => 'utils',
    'vcsprintf' => 'xsprintf/csprintf',
    'vjsprintf' => 'xsprintf/jsprintf',
    'xhp_parser_node_constants' => 'parser/xhpast/constants',
    'xhpast_get_binary_path' => 'parser/xhpast/bin',
    'xhpast_get_build_instructions' => 'parser/xhpast/bin',
    'xhpast_get_parser_future' => 'parser/xhpast/bin',
    'xhpast_is_available' => 'parser/xhpast/bin',
    'xhpast_parser_token_constants' => 'parser/xhpast/constants',
    'xsprintf' => 'xsprintf',
    'xsprintf_callback_example' => 'xsprintf',
    'xsprintf_command' => 'xsprintf/csprintf',
    'xsprintf_javascript' => 'xsprintf/jsprintf',
  ),
  'requires_class' =>
  array(
    'AbstractDirectedGraphTestCase' => 'ArcanistPhutilTestCase',
    'ConduitFuture' => 'FutureProxy',
    'ExecFuture' => 'Future',
    'FutureProxy' => 'Future',
    'HTTPFuture' => 'Future',
    'HTTPSFuture' => 'Future',
    'ImmediateFuture' => 'Future',
    'PhutilDefaultSyntaxHighlighterEngine' => 'PhutilSyntaxHighlighterEngine',
    'PhutilDefaultSyntaxHighlighterEnginePygmentsFuture' => 'FutureProxy',
    'PhutilDefaultSyntaxHighlighterEngineTestCase' => 'ArcanistPhutilTestCase',
    'PhutilDocblockParserTestCase' => 'ArcanistPhutilTestCase',
    'PhutilExcessiveServiceCallsDaemon' => 'PhutilTortureTestDaemon',
    'PhutilFatalDaemon' => 'PhutilTortureTestDaemon',
    'PhutilHangForeverDaemon' => 'PhutilTortureTestDaemon',
    'PhutilNiceDaemon' => 'PhutilTortureTestDaemon',
    'PhutilProcessGroupDaemon' => 'PhutilTortureTestDaemon',
    'PhutilRemarkupEngine' => 'PhutilMarkupEngine',
    'PhutilRemarkupEngineRemarkupCodeBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupDefaultBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupHeaderBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupInlineBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupListBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupNoteBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineRemarkupQuotesBlockRule' => 'PhutilRemarkupEngineBlockRule',
    'PhutilRemarkupEngineTestCase' => 'ArcanistPhutilTestCase',
    'PhutilRemarkupRuleBold' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleEscapeHTML' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleEscapeRemarkup' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleHyperlink' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleItalic' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleLinebreaks' => 'PhutilRemarkupRule',
    'PhutilRemarkupRuleMonospace' => 'PhutilRemarkupRule',
    'PhutilSaturateStdoutDaemon' => 'PhutilTortureTestDaemon',
    'PhutilTortureTestDaemon' => 'PhutilDaemon',
    'PhutilUTF8TestCase' => 'ArcanistPhutilTestCase',
    'PhutilUtilsTestCase' => 'ArcanistPhutilTestCase',
    'TestAbstractDirectedGraph' => 'AbstractDirectedGraph',
    'XHPASTTreeTestCase' => 'ArcanistPhutilTestCase',
  ),
  'requires_interface' =>
  array(
  ),
));
