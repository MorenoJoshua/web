<?php

class Simple extends CI_Controller
{
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

    public function postCrearVehiculo()
    {
        $this->crear_producto($_POST);
    }

    public function crear_vehiculo()
    {
        $html = '';

        $this->load->view('vistas/templates/header');
        $this->load->view('vistas/templates/navbar');
        $this->load->view('vistas/templates/sidebar');
        $this->load->view('vistas/templates/body');

        $tablas = [
            'vehiculo',
//            'estacion',
//            'transmision',
//            'suspension',
//            'accesorios',
//            'dimensiones',
//            'pruebas',
        ];

        foreach ($tablas as $tabla) {
            $tables[$tabla] = $this->db->query('show fields from ' . $this->db->escape($tabla));
        }
        $l = 0;
        $html .= '<div class=row" id="accordion" role="tablist" aria-multiselectable="false">';
        $html .= '<form action="' . site_url('simple/postCrearVehiculo') . '" method="post" enctype="multipart/form-data" id="productoForma">';

        foreach ($tables as $tableName => $fields) {
            $campos = '';
            foreach ($fields as $key => $field) {
//        print_r($field);

//            $type = substr($field['Type'], 0, strpos($field['Type'], '('));
                $type = strtok($field['Type'], '(');

                $typeT = $this->typeTrans($type);
                $name = $field['Field'];
                $arrName = $tableName . "[" . $name . "]";

                $ignorar = [
                    'id',
                    'usuario',
                    'estacion',
                    'motor',
                    'transmision',
                    'suspension',
                    'accesorios',
                    'pruebas',
                    'dimensiones',
                    'vehiculo',
                    'galeria',
                ];
                if ($name == 'imagen') {
                    $campos .= <<<HTML
                    <div class="col-6 pb-2">
    <div class="col-12"><label for="campo$name">$name</label></div>
    <div class="col-12"><input type="file" name="imgs[]" id="imgs" placeholder="Imagen" /></div>
</div>

HTML;

                } elseif (in_array($name, $ignorar)) {
                    $campos .= '';
                } else {
                    $campos .= <<<HTML
<div class="col-6 pb-2">
    <div class="col-12"><label for="campo$name">$name</label></div>
    <div class="col-12"><input type="$typeT" name="$arrName" placeholder="$name" class="form-control"></div>
</div>

HTML;
                }


            }
            $cClass = $l == 0 ? 'collapse show' : 'collapse collapsed';
//            $cClass = '';

            $anterior = $l == 0 ? '' : "<div onclick=\"sn($l, -1)\" class=\"btn btn-warning\">Anterior</div>";
            $siguiente = $l == (count($tables) - 1) ? '<input type="submit" class="btn btn-lg btn-success" value="Submit">' : "<div onclick=\"sn($l, 1)\" class=\"btn btn-success\" tabindex='0'>Siguiente</div>";
//            $siguiente = $l == (count($tables) - 1) ? '<div class="btn-lg btn-success" onclick="productoSubmit()">Submit</div>' : "<div onclick=\"sn($l, 1)\" class=\"btn btn-success\" tabindex='0'>Siguiente</div>";
            $html .= <<<HTML
<div class="col-12">
    <div id="collapse$tableName" class="$cClass" role="tabpanel" aria-labelledby="heading$tableName">
    <div class="col-12 h3 mb-0" role="tab" id="heading$tableName" data-toggle="collapse" data-parent="#accordion"
         data-target="#collapse$tableName" aria-expanded="true"
         aria-controls="collapse$tableName">$tableName
    </div>
        <div class="row">
            $campos        
</div>
            $anterior
            $siguiente
    </div>
</div>
HTML;
            $l++;
        }


        $html .= '</form>';
        $html .= '</div>';
        $data['html'] = $html;
        $this->load->view('vistas/templates/html', $data);
        $this->load->view('vistas/templates/footer');
        $this->load->view('vistas/templates/fin');


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
            if ($campos['vin'] == '') {
                $campos['vin'] = '_' . uniqid();
            }
//            var_dump($tabla, $campos);
            if (!$error && $this->db->insert($tabla, $campos)) {
                $ids[$tabla] = $this->db->getInsertId();
            } else {
                $error = true;


                echo 'hubo un error ' . $this->db->getLastError();
                die();
                break;
            }
        };

        if (!$error) {
            $idVehiculo = $ids['vehiculo'];
            unset($ids['vehiculo']);

            if (move_uploaded_file($_FILES['imgs']['tmp_name'][0], __DIR__ . '/../../assets/img/' . $idVehiculo . '.jpg')) {
                $this->db->where('id', $idVehiculo)->update('vehiculo', ['imagen' => $idVehiculo]);

            } else {
                echo 'no se pudo mover imagen';
            }

//                $ids['galeria'] = $this->crear_galeria($_FILES, $idVehiculo);
//            if ($this->db->where('id', $idVehiculo)->update('vehiculo', $ids)) {
//                echo 'ooooooook';
//            } else {
//                echo 'hubo un error al actualizar la tabla de productos';
//            }
        } else {
            echo 'error en 2da parte';
        }


//        var_dump($arr);
//        print_r($arr['vehiculo']);
    }

    public function crear_galeria($files, $idVehiculo)
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