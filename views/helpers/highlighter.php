<?php

class HighlighterHelper extends AppHelper {

    var $helpers = array(
        'Html',
        'Js',
    );

    function beforeRender() {
        if (ClassRegistry::getObject('view')) {

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
}
?>