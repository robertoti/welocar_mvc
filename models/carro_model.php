<?php

class Carro_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        
    }
 

    public function selecionaCarro($categoria)
    {
        $disponivel = 0;
        return $this->db->select('SELECT car_id FROM carro WHERE disponivel = :disponivel AND car_id = :categoria', array(':categoria' => $categoria));
        
    }
    
    public function carroList()
    {
        return $this->db->select('SELECT car_id, categoria, disponivel, placa, km FROM carro ORDER BY car_id;');
    }
    
    public function carroSingleList($car_id)
    {
        return $this->db->select('SELECT car_id, categoria, disponivel, placa, km FROM carro WHERE car_id = :car_id', array(':car_id' => $car_id));
    }
    
    

    public function create($data)
    {
        $this->db->insert('carro', array(             
            'categoria' => $data['categoria'],  
            'disponivel' => $data['disponivel'],  
            'placa' => $data['placa'],
            'km' => $data['km']                
        )); 
        
                
    }
    
    public function editSave($data)
    {
        $postData = array(
            'categoria' => $data['categoria'],  
            'placa' => $data['placa'],
            'km' => $data['km']   
        );
        
        $this->db->update('carro', $postData, "`car_id` = {$data['car_id']}");
    }
    
    public function delete($car_id)
    {                
       $result = $this->db->select('SELECT disponivel FROM carro WHERE car_id = :car_id', array(':car_id' => $car_id));  
       $this->db->delete('carro', "car_id = '$car_id'"); 
    }
     
    
}