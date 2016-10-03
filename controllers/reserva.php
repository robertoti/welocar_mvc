 <?php

class Reserva extends Controller {

    public function __construct() {
        parent::__construct();
        Auth::handleLogin();
        
    }
    
    public function index() 
    {    
        $this->view->reservaList = $this->model->reservaList();
        $this->view->carroList = $this->model->carroList();
        $this->view->render('reserva/index');
    }
    
     public function selecionaCarro(){
         
     }
    
    public function create() 
    {
        $data = array();
        $data['userid'] = $_SESSION['userid'];
        $data['categoria'] = $_POST['categoria'];
        $data['date_added'] = $_POST['date_added'];
        $data['date_inicio'] = $this->model->dateToDB($_POST['date_inicio']);
        $data['date_fim'] = $this->model->dateToDB($_POST['date_fim']);
        $data['status'] = $_POST['status'];  
        
        // @TODO: Do your error checking!
        
        $this->model->create($data);
        header('location: ' . URL . 'reserva');
        
    }    
        
    public function edit($reservaid) 
    {
        $this->view->reserva = $this->model->reservaSingleList($reservaid);
        
        $this->view->render('reserva/edit');
    }
   
    public function editCar($reservaid) 
    {
        $this->view->reserva = $this->model->carSingleList($reservaid);
        
        $this->view->render('reserva/edit_car');
    }
    
    public function editSave($id)
    {
        $data = array();        
        $data['reservaid'] = $_SESSION['reservaid'];
        $data['userid'] = $_SESSION['userid'];
        $data['categoria'] = $_POST['categoria'];
        $data['date_added'] = $_POST['date_added'];
        $data['date_inicio'] = $_POST['date_inicio'];
        $data['date_fim'] = $_POST['date_fim'];
        $data['status'] = 'ativa'; 
        
        // @TODO: Do your error checking!
        
        $this->model->editSave($data);
        header('location: ' . URL . 'reserva');
    }
    
    public function editSaveCar($id)
    {
        $data = array();        
        $data['car_id'] = $_SESSION['car_id'];
        $data['categoria'] = $_POST['categoria'];
        $data['placa'] = 'placa';  
        $data['km'] = 0;
        
        
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