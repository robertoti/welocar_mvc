<?php

class Reserva_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function reservaList()
    {
        return $this->db->select('SELECT reservaid, userid, car_id,categoria,date_added, date_inicio, date_fim, status FROM reserva;');
    }
    
    public function reservaSingleList($reservaid)
    {
        return $this->db->select('reservaid, userid, car_id,categoria,date_added, date_inicio, date_fim, status FROM reserva WHERE reservasid = :reservasid', array(':reservasid' => $reservasid));
    }
    
    public function create($data)
    {
        $this->db->insert('reserva', array( 
            'userid' => $_SESSION['userid'],
            'categoria' => $data['categoria'],
            'date_added' => $data['date_added'],
            'date_inicio' => $data['date_inicio'],
            'date_fim' => $data['date_fim'],
            'status' => $data['status'],         
            'disponivel' => $data['disponivel']
        ));       
            
           
        var_dump($data);
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
        $result = $this->db->select('SELECT role FROM reserva WHERE reservaid = :reservaid', array(':reservaid' => $reservaid));

        if ($result[0]['status'] == 'ativo')
        return false;
        
        $this->db->delete('reserva', "reservaid = '$reservaid'");
    }
    public function calculaDataEntrega($data_retirada, $quantidadeDias)
    {
        $data_entrega = strtotime($data_retirada . $quantidadeDias);       
               
    }
}