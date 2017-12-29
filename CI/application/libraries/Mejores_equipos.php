<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mejores_equipos
{

    protected $CI;
    public $db;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->db = $this->CI->db;
    }

    public function foo()
    {

        echo microtime();
    }


}