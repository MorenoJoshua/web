<?php

class Base
{
    public $db;

    public function __construct()
    {
        require_once __DIR__ . '/../config.php';
        require_once __DIR__ . '/MysqliDb.php';
        $this->db = new MysqliDb($host, $user, $password, $db);
    }

    public function view($vista, $data = [])
    {
        foreach ($data as $k => $v) {
            $$k = $v;
        }
        require_once __DIR__ . '/../vistas/' . $vista . '.php';
    }

    public function typeTrans($type)
    {
        switch ($type) {
            default:
                $tr = 'text';
                break;
            case 'int':
                $tr = 'number';
                break;
            case 'varchar':
                $tr = 'text';
                break;
        }
        return $tr;
    }

    public function galeria($galeria)
    {
        return $this->db->where('galeria', $galeria)->get('galeria');
    }

    public function crear_producto($arr)
    {
        //idNuevoGaleria= max galeria de galeria + 1;
        //insertar en galeria agregando galeria  idNuevoGaleria
        $error = false;
        foreach ($arr as $tabla => $campos) {
            if (!$error && $this->db->insert($tabla, $campos)) {
                $ids[$tabla] = $this->db->getInsertId();
            } else {
                $error = true;
                echo 'hubo un error';
                die();
                break;
            }
        };

        if (!$error) {
            $idVehiculo = $ids['vehiculo'];
            unset($ids['vehiculo']);
            $ids['galeria'] = $this->crear_galeria($_FILES);
            if ($this->db->where('id', $idVehiculo)->update('vehiculo', $ids)) {
                echo 'ooooooook';
            } else {
                echo 'hubo un error al actualizar la tabla de productos';
            }
        }


//        var_dump($arr);
//        print_r($arr['vehiculo']);
    }

    public function crear_galeria($files)
    {
        //subir imagenes y crear arreglo
        //ibtener id de galeria como max galeria + 1
        //insertar arreglo a tabla de galerias con galeria max(galeria) + 1
        //actualizar vehiculo con id de galeria o regresar arreglo galeria => idgaleria

        $galeriaId = $this->db->query('select max(galeria) gId from galeria')[0]['gId'];


//        var_dump($galeriaId);
        if ($galeriaId === null) {
            $galeriaId = 0;
        } else {
            $galeriaId = ((int)$galeriaId) + 1;
        }

        $file = $_FILES['imgs'];
        foreach ($_FILES['imgs']['name'] as $key => $archivo) {
            $archivoNuevo = md5($file['name'][$key] . microtime()) . '.' . pathinfo($file['name'][$key], PATHINFO_EXTENSION);
            if (move_uploaded_file($file['tmp_name'][$key], './imagenes/' . $archivoNuevo)) {
                $toinsert = [
                    'galeria' => $galeriaId,
                    'imagen' => $archivoNuevo
                ];
                $this->db->insert('galeria', $toinsert);
            }

        }


        return $galeriaId;
    }
}