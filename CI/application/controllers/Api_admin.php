<?php

/**
 * Created by PhpStorm.
 * User: moren
 * Date: 5/16/2017
 * Time: 9:13 PM
 */
class Api_admin extends CI_Controller
{
    public function editar_orden($productoId)
    {
        $this->db->where('id', $productoId)->update('productos', $_POST);
        header('location: ' . site_url('admin'));

    }

    public function editar($productoId)
    {
        unset($_POST['id']);

        $filename = $_FILES['imagen']['tmp_name'];
        $destination = __DIR__ . '/../../assets/img/' . $productoId . '.jpg';

        if (move_uploaded_file($filename, $destination) OR $_FILES['imagen']['name'] == '') {
            $_FILES['imagen']['name'] == '' ?: $_POST['imagen'] = $productoId;
            if ($this->db->where('id', $productoId)->update('vehiculo', $_POST)) {
                header('location:' . site_url('/admin/editar/' . $productoId . '?ok'));
            } else {
                echo 'hubo un error';
            }
        } else {
            echo 'super error';
        }
    }

    public function agregar()
    {
        if ($this->db->insert('vehiculo', $_POST)) {
            $id = $this->db->getInsertId();
            if (move_uploaded_file($_FILES['imagen']['tmp_name'], __DIR__ . '\..\..\..\assets\img\\' . $id . '.jpg')) {
                $this->db->where('id', $id)->update('vehiculo', ['imagen' => $id]);
                header('location: ' . site_url('/admin/'));
            }
        };
    }

    public function eliminar($productoId)
    {
        $this->db->where('id', $productoId)->delete('productos');
        header('location: ' . site_url('/admin/'));
    }

    public function login()
    {
        $res = $this->db
            ->where('usuario', $_POST['usuario'])
            ->where('password', $_POST['password'])
            ->getOne('usuarios');
        if ($res) {
            session_start();
            $_SESSION = $res;
            $_SESSION['time'] = time();
            redirect('admin/ok');
        }
    }
}