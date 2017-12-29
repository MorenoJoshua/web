<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function index_()
    {
        $data['productos'] = $this->db
            ->orderBy('orden', 'asc')
            ->orderBy('pie', 'asc')
            ->get('productos');

        $this->load->view('templates/header');
        $this->load->view('landing/main', $data);
        $this->load->view('templates/footer');
        $this->load->view('landing/modales');
        $this->load->view('landing/scripts');
    }

    public function index()
    {
        $productos = $this->db->get('vehiculo');
        $data['productsHTML'] = '';
        $tablasExtras = [
            'estacion',
            'motor',
            'transmision',
            'suspension',
            'accesorios',
            'pruebas',
            'dimensiones',
            'galeria',
        ];
        foreach ($productos as $producto) {
            foreach ($tablasExtras as $tablasExtra) {
                if ($tablasExtra == 'galeria' && $tablasExtra) {
                    $producto[$tablasExtra] = $this->db->where('galeria', $producto[$tablasExtra])->get('galeria');
                } elseif ($tablasExtra) {
                    $producto[$tablasExtra] = $this->db->where('id', $producto[$tablasExtra])->getOne($tablasExtra);
                } else {
                    unset($producto[$tablasExtra]);
                }
            }

            $data['productsHTML'] .= landingProductTemplate($producto);
        }


        $this->load->view('v2/templates/header');
        $this->load->view('v2/templates/navbar');
        $this->load->view('v2/templates/main-wrap_init');
        $this->load->view('v2/templates/topBar');



        $this->load->view('v2/templates/landing', $data);
        $this->load->view('v2/templates/footer');
        $this->load->view('v2/templates/main-wrap_end');
    }
}
