<?php

class Reserva_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function reservaList() {
        if (Session::get('role') == 'default'):
            $userid = Session::get('userid');
            return $this->db->select('SELECT reservaid, userid, car_id,categoria,date_added, date_inicio, date_fim, hora_inicio, status FROM reserva WHERE userid = :userid ORDER BY date_inicio DESC', array(':userid' => $userid));
        else:
            return $this->db->select('SELECT reservaid, reserva.userid, car_id,categoria,date_added, date_inicio, date_fim, hora_inicio, status, login FROM reserva INNER JOIN user ON reserva.userid=user.userid ORDER BY date_inicio DESC;');
        endif;
    }
    
    public function updateStatus()
    {
        $data = $this->db->select('SELECT reservaid FROM reserva WHERE date_inicio < NOW();');        
        $postData = array(
            'status' => 'expirada'
        );        
        foreach ($data as $value) {
            $this->db->update('reserva', $postData, "`reservaid` = {$value['reservaid']}");            
        }        
    }

    public function reservaSingleList($reservaid) {        
        return $this->db->select('SELECT reservaid, userid, car_id, categoria, date_added, date_inicio, date_fim, hora_inicio, status FROM reserva WHERE reservaid = :reservaid', array(':reservaid' => $reservaid));
    }

    public function dateToDB($data) {
        $data = implode("-", array_reverse(explode("/", $data)));
        return $data;
    }

    public function create($data) {
        $this->db->insert('reserva', array(
            'userid' => $_SESSION['userid'],
            'categoria' => $data['categoria'],
            'date_added' => $data['date_added'],
            'date_inicio' => $data['date_inicio'],
            'date_fim' => $data['date_fim'],
            'hora_inicio' => $data['hora_inicio'],            
            'status' => $data['status']
        ));
    }

    public function editSave($data) {
        $postData = array(
            'reservaid' => $data['reservaid'],
            'categoria' => $data['categoria'],
            'date_inicio' => $data['date_inicio'],
            'date_fim' => $data['date_fim'],
        );

        $this->db->update('reserva', $postData, "`reservaid` = {$data['reservaid']}");
    }

    public function delete($reservaid) {
        $result = $this->db->select('SELECT status FROM reserva WHERE reservaid = :reservaid', array(':reservaid' => $reservaid));

        if ($result[0]['status'] == 'ativo')
            return false;

        $this->db->delete('reserva', "reservaid = '$reservaid'");
    }

    public function selecionaCarro($categoria) {
        $disponivel = 0;
        return $this->db->select('SELECT car_id FROM carro WHERE disponivel = :disponivel AND car_id = :categoria', array(':categoria' => $categoria));
    }

    public function carroList() {
        return $this->db->select('SELECT car_id, categoria, disponivel, placa, km FROM carro;');
    }

    public function carroSingleList($car_id) {
        return $this->db->select('SELECT car_id, categoria, disponivel, placa, km FROM carro WHERE car_id = :car_id', array(':car_id' => $car_id));
    }

    public function createCar($data) {
        $this->db->insert('carro', array(
            'categoria' => $data['categoria'],
            'disponivel' => $data['disponivel'],
            'placa' => $data['placa'],
            'km' => $data['km']
        ));
    }

    public function editCarSave($data) {
        $postData = array(
            'categoria' => $data['categoria'],
            'disponivel' => $data['disponivel'],
            'placa' => $data['placa'],
            'km' => $data['km']
        );

        $this->db->update('carro', $postData, "`car_id` = {$data['car_id']}");
    }

    public function deleteCar($car_id) {
        $result = $this->db->select('SELECT disponivel FROM carro WHERE car_id = :car_id', array(':car_id' => $car_id));

        if ($result[0]['status'] == '1')
            return false;

        $this->db->delete('carro', "car_id = '$car_id'");
    }

}
