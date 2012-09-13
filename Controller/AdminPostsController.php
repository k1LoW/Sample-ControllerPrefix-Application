<?php

App::uses('AppController', 'Controller');

class AdminPostsController extends AppController {

    public $name = 'AdminPosts';

    public $uses = array();

    public function index(){
        $this->layout = 'ajax';
        $this->autoRender = false;
        echo 'AdminPostsController::index';
    }
}