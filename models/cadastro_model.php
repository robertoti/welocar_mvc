<?php

class Cadastro_Model extends Model {

    public function __construct() {
        parent::__construct();
    }

    public function userList() {
        return $this->db->select('SELECT userid, login, role FROM user');
    }

    public function userSingleList($userid) {
        return $this->db->select('SELECT userid, login, role FROM user WHERE userid = :userid', array(':userid' => $userid));
    }

    public function create($data) {
        $sth = $this->db->prepare('SELECT login FROM user WHERE login = :login;');

        $sth->execute(array(
            ':login' => $data['login']
        ));

        $count = $sth->rowCount();

        if ($count > 0):            
            header('location: ../cadastro?erro');
        else:

            $this->db->insert('user', array(
                'login' => $data['login'],
                'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY)
            ));
            Session::init();
            Session::set('cadastro', 'ok');
            header('location: ../login?login');

        endif;
    }

}
