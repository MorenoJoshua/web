<?php
$l = 0;
echo '<div class="row" id="accordion" role="tablist" aria-multiselectable="false">';
foreach ($tables as $tableName => $fields) {
    $campos = '';
    foreach ($fields as $field) {
//        print_r($field);

//            $type = substr($field['Type'], 0, strpos($field['Type'], '('));
        $type = strtok($field['Type'], '(');

        $typeT = $me->typeTrans($type);
        $name = $field['Field'];

        $campos .= <<<HTML
<div class="col-6 pb-2">
    <div class="col-12"><label for="campo$name">$name</label></div>
    <div class="col-12"><input type="$typeT" name="$name" placeholder="$name" class="form-control"></div>
</div>

HTML;

    }
    $cClass = $l == 0 ? 'collapse show' : 'collapse collapsed';

    echo <<<HTML
<div class="col-12 bg-faded">
    <div id="collapse$tableName" class="$cClass" role="tabpanel" aria-labelledby="heading$tableName">
    <div class="col-12 h3 mb-0" role="tab" id="heading$tableName" data-toggle="collapse" data-parent="#accordion"
         data-target="#collapse$tableName" aria-expanded="true"
         aria-controls="collapse$tableName">$tableName
    </div>
        <form action="">
        <div class="row">
            $campos        
</div>
            <div onclick="sn($l, -1)" class="btn btn-warning">Anterior</div>
            <div onclick="sn($l, 1)" class="btn btn-success">Siguiente</div>
        </form>
    </div>
</div>
HTML;
    $l++;
}

echo '</div>';
