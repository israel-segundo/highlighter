<?php

class HighlighterActivation {

    public function beforeActivation(&$controller) { return true;}
    public function onActivation(&$controller) {}
    public function beforeDeactivation(&$controller) { return true; }
    public function onDeactivation(&$controller) {}


}
?>