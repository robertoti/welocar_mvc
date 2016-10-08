<?php

class Cadastro extends Controller {

    public function __construct() {
        parent::__construct();              
    }
    
    public function index() 
    {   
        $this->view->title = 'Cadastro | Welocar';
        $this->view->render('cadastro/index');
    }
    
    public function create() 
    {                 
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = $_POST['password'];
       
        
        // @TODO: Do your error checking!      
       
        
        $this->model->create($data);
        header('location: ' . URL . 'cadastro');
    }
    
    
    
  
}