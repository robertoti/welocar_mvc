<?php

class Helpers
{
    /**
     * <b>dateToView: </b>
     * 
     * Configura a data e hora (Y-m-d) no padrão brasileiro;
     * 
     * @param date $data
     * @return date pt-br
     */    
    public static function dateToView($data) {
        $data = implode("/", array_reverse(explode("-", $data)));
        return $data;
    }

    public static function dateTimeToDB($data) {
        $data = implode("-",array_reverse(explode("/",$data)));        
        return $data;
    }

    public static function dateTimeToView($data) {
        $data = explode(' ', $data);
        $data[0] = implode("/", array_reverse(explode("-", $data[0])));
        $data = implode(' ', $data);
        return $data;        
    }
    
}