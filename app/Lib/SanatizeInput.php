<?php

App::uses('Sanitize', 'Utility');


class SanatizeInput extends Sanitize{
    public static function cleanInput($data){
        return Sanitize::clean($data,array('odd_spaces','remove_html','escape'));
    }
}
