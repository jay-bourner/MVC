<?php
class Load {
    
    public function controller($url) {
        require('controller/'.$url);
    }
    
    public function model($url) {
        require('model/'.$url);
    }
    
    public function view($url) {
        require('view/'.$url);
    }
}