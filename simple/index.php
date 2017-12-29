<?php
require_once './clases/Base.php';

$me = new Base();


switch ($_GET['p']) {
    default:
    case 'index':

        $me->view('templates/header');
        $me->view('templates/navbar');
        $me->view('templates/sidebar');
        $me->view('templates/body');


        $tablas = [
            'vehiculo',
            'estacion',
            'transmision',
            'suspension',
            'accesorios',
            'dimensiones',
            'pruebas',
        ];

        foreach ($tablas as $tabla) {
            $tables[$tabla] = $me->db->query('show fields from ' . $me->db->escape($tabla));
        }
        $l = 0;
        echo '<div class=row" id="accordion" role="tablist" aria-multiselectable="false">';
        echo '<form action="index.php?p=crear_producto" method="post" enctype="multipart/form-data" id="productoForma">';
    echo <<<HTML
         <input type="file" name="imgs[]" id="imgs" multiple /> 
<!--<input type="file" accept="image/*" name="galeria" multiple>-->
HTML;

    foreach ($tables as $tableName => $fields) {
            $campos = '';
            foreach ($fields as $key => $field) {
//        print_r($field);

//            $type = substr($field['Type'], 0, strpos($field['Type'], '('));
                $type = strtok($field['Type'], '(');

                $typeT = $me->typeTrans($type);
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
                if (in_array($name, $ignorar)) {
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
//        $cClass = $l == 0 ? 'collapse show' : 'collapse collapsed';
            $cClass = '';

            $anterior = $l == 0 ? '' : "<div onclick=\"sn($l, -1)\" class=\"btn btn-warning\">Anterior</div>";
            $siguiente = $l == (count($tables) - 1) ? '<input type="submit" class="btn btn-lg btn-success" value="Submit">' : "<div onclick=\"sn($l, 1)\" class=\"btn btn-success\" tabindex='0'>Siguiente</div>";
//            $siguiente = $l == (count($tables) - 1) ? '<div class="btn-lg btn-success" onclick="productoSubmit()">Submit</div>' : "<div onclick=\"sn($l, 1)\" class=\"btn btn-success\" tabindex='0'>Siguiente</div>";
            echo <<<HTML
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

        echo '</form>';
        echo '</div>';
        $me->view('templates/footer');
        $me->view('templates/fin');

        break;
    case 'crear_producto';
        $me->crear_producto($_POST);
        break;
}