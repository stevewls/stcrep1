<?php

class MainPage {

    var $body;

    function render() {
        echo $this->body;
    }

}

$main_page = new MainPage();
$main_page->body = 'Hello there';
$main_page->render();

?>
