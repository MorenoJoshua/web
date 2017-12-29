<?php

class Api extends CI_Controller
{
    public function index()
    {
//nada que ver
    }

    public function solicitar_compra()
    {
        if ($this->_insertar_solicitud($_POST) &&
            $this->_notificar('j@morenojoshua.com', 'Nueva solicitod de compra', $_POST)
        ) {
            echo json_encode(['status' => 'ok']);
        } else {
            echo json_encode(['status' => 'error']);
        }
    }

    public function solicitar_oferta()
    {
        $this->_insertar_solicitud($_POST);
        $this->_notificar('j@morenojoshua.com', 'Nueva oferta', $_POST);
    }

    public function solicitar_renta()
    {
        $this->_insertar_solicitud($_POST);
        $this->_notificar('j@morenojoshua.com', 'Nueva solicitod de renta', $_POST);
    }

    private function _insertar_solicitud($solicitud)
    {
        return $this->db->insert('solicitudes', $solicitud);
    }

    private function _notificar($email, $header, $info)
    {
        return mail($email, $header, var_export($info));
    }
}