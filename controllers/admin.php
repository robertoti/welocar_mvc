<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();
        Auth::handleLogin();
        $this->view->js = array('admin/js/default.js');
    }
    
    function index() 
    {    
        $this->view->title = 'Admin';        
        $this->view->render('admin/index');
    }
    
    function logout()
    {
        Session::destroy();
        header('location: ' . URL);
        exit;
    }
    
    function xhrInsert()
    {
        $this->model->xhrInsert();
    }
    
    function xhrGetListings()
    {
        $this->model->xhrGetListings();
    }
    
    function xhrDeleteListing()
    {
        $this->model->xhrDeleteListing();
    }

}