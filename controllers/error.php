<?php

class Error extends Controller {

    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->view->msg = 'Essa página não existe!';
        $this->view->render('error/index');
    }

}