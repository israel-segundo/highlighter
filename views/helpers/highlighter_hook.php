<?php
/**
 * ExampleHook Helper
 *
 * An example hook helper for demonstrating hook system.
 *
 * @category Helper
 * @package  Croogo
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class HighlighterHookHelper extends AppHelper {
/**
 * Other helpers used by this helper
 *
 * @var array
 * @access public
 */
    var $helpers = array(
        'Html',
        'Js',
    );
/**
 * Before render callback. Called before the view file is rendered.
 *
 * @return void
 */
    function beforeRender() {
		echo $this->Html->css('/highlighter/css/shCore');
		echo $this->Html->css('/highlighter/css/shThemeRDark');
		echo $this->Html->script('/highlighter/js/shCore.js');
		echo $this->Html->script('/highlighter/js/shBrushBash.js');
		echo $this->Html->script('/highlighter/js/shBrushCSharp.js');
		echo $this->Html->script('/highlighter/js/shBrushCpp.js');
		echo $this->Html->script('/highlighter/js/shBrushCss.js');
		echo $this->Html->script('/highlighter/js/shBrushDelphi.js');
		echo $this->Html->script('/highlighter/js/shBrushDiff.js');
		echo $this->Html->script('/highlighter/js/shBrushJScript.js');
		echo $this->Html->script('/highlighter/js/shBrushPerl.js');
		echo $this->Html->script('/highlighter/js/shBrushPhp.js');
		echo $this->Html->script('/highlighter/js/shBrushPlain.js');
		echo $this->Html->script('/highlighter/js/shBrushPowerShell.js');
		echo $this->Html->script('/highlighter/js/shBrushPython.js');
		echo $this->Html->script('/highlighter/js/shBrushRuby.js');
		echo $this->Html->script('/highlighter/js/shBrushScala.js');
		echo $this->Html->script('/highlighter/js/shBrushSql.js');
		echo $this->Html->script('/highlighter/js/shBrushVb.js');
		echo $this->Html->script('/highlighter/js/shBrushXml.js');
      echo $this->Html->scriptBlock("
	SyntaxHighlighter.config.clipboardSwf = '/highlighter/js/clipboard.swf';
	SyntaxHighlighter.config.stripBrs = true;
	SyntaxHighlighter.defaults['wrap-lines'] = true;
	SyntaxHighlighter.all();
");
    }
}
?>