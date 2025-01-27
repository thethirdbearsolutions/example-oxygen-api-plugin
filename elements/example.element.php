<?php

class ExampleElement extends OxyEl {

    function init() {
        // Do some initial things here.
    }

    function afterInit() {
        // Do things after init, like remove apply params button and remove the add button.
        $this->removeApplyParamsButton();
        // $this->removeAddButton();
    }

    function name() {
        return 'My Example Element';
    }
    
    function slug() {
        return "my-example-element";
    }

    function icon() {
        // Path to icon here.
    }

    function button_place() {
        // return "interactive";
    }

    function button_priority() {
        // return 9;
    }

    
    function render($options, $defaults, $content) {
    	$css = file_get_contents(__DIR__.'/'.basename(__FILE__, '.php').'.css');
    	echo '<style>' . $css . '</style>';
    	$file = __DIR__ . '/' . basename(__FILE__, '.php') . '.html';
	include $file;        
    }

    function controls() {
    }

    function defaultCSS() {
    }
    
}

new ExampleElement();
