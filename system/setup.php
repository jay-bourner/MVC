<?php
require('router.php');
require('controller.php');
require('model.php');

class Setup {
    function __construct() {
        new Router();
        new Controller();
        new Model();
    }
}