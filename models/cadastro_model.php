<?php

class Cadastro_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function userList()
    {
        return $this->db->select('SELECT userid, login, role FROM user');
    }
    
    public function userSingleList($userid)
    {
        return $this->db->select('SELECT userid, login, role FROM user WHERE userid = :userid', array(':userid' => $userid));
    }
    
    public function create($data)
    {
        if(!$this->userExist()):
            $this->db->insert('user', array(
                'login' => $data['login'],
                'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY)
             
            ));
        else:
           /**
            * Mensagem de erro de usuário existente!            
            */
            
        endif;
    }
    
    
    public function userExist()
    {
        $sth = $this->db->prepare("SELECT userid, role FROM user WHERE 
                login = :login");
        $sth->execute(array(
            ':login' => $_POST['login'],
        ));
        
        $data = $sth->fetch();
        
        $count =  $sth->rowCount();
        if ($count > 0) {
            return TRUE;
        } else {
            return FALSE; 
        }
        
    }
    
   

    
    
     
}