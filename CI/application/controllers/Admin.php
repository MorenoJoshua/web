<?php

/**
 * Created by PhpStorm.
 * User: moren
 * Date: 5/16/2017
 * Time: 8:16 PM
 */
class Admin extends CI_Controller
{

    public function _check()
    {
        session_start();
        if (isset($_SESSION['id'])) {
            return true;
        } else {
            $this->_login();
            return false;
        }
    }

    public function _login()
    {
        $this->load->view('templates/header');
        $this->load->view('admin/login');
        $this->load->view('templates/footer');

    }

    public function index()
    {
        $this->_check() ? redirect('admin/ok') : redirect('admin/login');

    }

    public function ok()
    {
        $this->_check() ?: redirect('admin/login');
        $productos = $this->db
            ->orderBy('orden', 'asc')
            ->get('vehiculo');
        $data['productos'] = $productos;

        $this->load->view('templates/header');
        $this->load->view('admin/main', $data);
        $this->load->view('templates/footer');
    }

    public function editar($productoId)
    {
        $producto = $this->db->where('id', $productoId)->getOne('vehiculo');
        $data['producto'] = $producto;
        $data['encabezado'] = 'Editar producto';

        $this->load->view('templates/header');
        $this->load->view('admin/editar/main', $data);

        $this->load->view('formas/editar/producto', $data);

        $this->load->view('templates/footer');
    }
}