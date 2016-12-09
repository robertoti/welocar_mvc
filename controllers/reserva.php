<?php

class Reserva extends Controller {

    public function __construct() {
        parent::__construct();
        Auth::handleLogin();        
    }

    public function index() {
        $this->view->reservaList = $this->model->reservaList();
        $this->view->carroList = $this->model->carroList();                      
        $this->view->updateStatus = $this->model->updateStatus();               
        $this->view->render('reserva/index');
        
    }

    public function create() {
        $data = array();
        $data['userid'] = $_SESSION['userid'];
        $data['categoria'] = $_POST['categoria'];
        $data['date_added'] = $_POST['date_added'];
        $data['date_inicio'] = $this->model->dateToDB($_POST['date_inicio']);
        $data['date_fim'] = $this->model->dateToDB($_POST['date_fim']);
        $data['hora_inicio'] = $this->model->dateToDB($_POST['hora_inicio']);
        $data['status'] = $_POST['status'];
            
        $this->model->create($data);
        header('location: ' . URL . 'reserva');
    }
  
    public function edit($reservaid) {
        $this->view->reserva = $this->model->reservaSingleList($reservaid);

        $this->view->render('reserva/edit');
    }

    public function editSave($id) 
    {
        $data = array();
        $data['reservaid'] = $id;
        $data['categoria'] = $_POST['categoria'];
        $data['date_inicio'] = $this->model->dateToDB($_POST['date_inicio']);
        $data['date_fim'] = $this->model->dateToDB($_POST['date_fim']);

        // @TODO: Do your error checking!

        $this->model->editSave($data);
        header('location: ' . URL . 'reserva');
    }

    public function delete($id) 
    {
        $this->model->delete($id);
        header('location: ' . URL . 'reserva');
    }

    public function deleteCar($id) 
    {
        $this->model->deleteCar($id);
        header('location: ' . URL . 'reserva');
    }
    
}
