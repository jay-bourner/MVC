<?php
require('config.php');
require('router.php');
require('controller.php');
require('model.php');
require('loader.php');

class Setup {
    function __construct() {
        new Router();
    }
}