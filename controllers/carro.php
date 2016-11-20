<?php

class Carro extends Controller {

    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
        
    }
    
    public function index() 
    {           
        $this->view->carroList = $this->model->carroList();
        $this->view->render('carro/index');
    }
    
     public function selecionaCarro(){
         
     }
    
    public function create() 
    {
        $data = array();
        $data['categoria'] = $_POST['categoria'];
        $data['placa'] = $_POST['placa'];
        $data['km'] = $_POST['km']; 
        
        $this->model->create($data);
        header('location: ' . URL . 'carro');
        
    }
    
    public function edit($car_id) 
    {
        $this->view->carro = $this->model->carroSingleList($car_id);
        
        $this->view->render('carro/edit');
    }
    
    public function editSave($id)
    {
        $data = array();        
        $data['car_id'] = $id;       
        $data['categoria'] = $_POST['categoria'];
        $data['placa'] = $_POST['placa'];
        $data['km'] = $_POST['km'];        
        
        
        
        // @TODO: Do your error checking!
        
        $this->model->editSave($data);
        header('location: ' . URL . 'carro');
    }
    
    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . URL . 'carro');
    }
    
   
}