<?php

App::uses('AppController', 'Controller');

class CustomPostsController extends AppController {

    public $name = 'CustomPosts';

    public $uses = array();

    public function index(){
        $this->layout = 'ajax';
        $this->autoRender = false;
        echo 'CustomPostsController::index';
    }
}