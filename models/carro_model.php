<?php

class Reserva_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function reservaListFunc()
    {
        return $this->db->select('SELECT reservaid, userid, car_id,categoria,date_added, date_inicio, date_fim, status FROM reserva;');
    }
       

    public function reservaList()
    {
        
        $userid = Session::get('userid');
        
        return $this->db->select('SELECT reservaid, userid, car_id,categoria,date_added, date_inicio, date_fim, status FROM reserva WHERE userid = :userid', array(':userid' => $userid));
    }
       
    public function reservaSingleList($reservaid)
    {
        return $this->db->select('SELECT reservaid, userid, car_id, categoria, date_added, date_inicio, date_fim, status FROM reserva WHERE reservaid = :reservaid', array(':reservaid' => $reservaid));
    }

    public function carroList()
    {
        return $this->db->select('SELECT car_id, categoria, disponivel, placa, km FROM carro;');
    }
    
    public function carroSingleList($car_id)
    {
        return $this->db->select('SELECT car_id, categoria, disponivel, placa, km FROM car WHERE car_id = :car_id', array(':car_id' => $car_id));
    }
    
    public function dateToDB($data){
        
        $data = implode("-",array_reverse(explode("/",$data)));
        
        return $data;
    }
    
    public function selecionaCarro($categoria){
        
        return  $this->db->select('SELECT car_id, categoria, disponivel FROM carro WHERE categoria = :categoria');
        
    }

        public function create($data)
    {
        $this->db->insert('reserva', array( 
            'userid' => $_SESSION['userid'],            
            'categoria' => $data['categoria'],
            'date_added' => $data['date_added'],
            'date_inicio' => $data['date_inicio'],
            'date_fim' => $data['date_fim'],
            'status' => $data['status']             
        )); 
        
                
    }
    
    public function editSave($data)
    {
        $postData = array(          
            'categoria' => $data['categoria'],           
            'date_inicio' => $data['date_inicio'],
            'date_fim' => $data['date_fim'],
            'status' => $data['status']
        );
        
        $this->db->update('reserva', $postData, "`reservaid` = {$data['reservaid']}");
    }
    
    public function delete($reservaid)
    {
        $result = $this->db->select('SELECT status FROM reserva WHERE reservaid = :reservaid', array(':reservaid' => $reservaid));

        if ($result[0]['status'] == 'ativo')
        return false;
        
        $this->db->delete('reserva', "reservaid = '$reservaid'");
        

    }
    
    public function deleteCar($car_id)
    {
        $result = $this->db->select('SELECT disponivel FROM reserva WHERE car_id = :car_id', array(':car_id' => $car_id));

        if ($result[0]['status'] == '1')
        return false;
        
        $this->db->delete('carro', "car_id = '$car_id'");
        
        
    }
    
}