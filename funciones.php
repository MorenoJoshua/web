<?php
function cardTemplate($contenido)
{
    $imagen = isset($contenido['imagen']) ? $contenido['imagen'] : '101';
    $tipo = isset($contenido['tipo']) ? ' ' . $contenido['tipo'] : '';
    return <<<HTML
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 producto" data-toggle="modal" data-target="#thumbnailModal" data-imagen="$imagen">
            <div class="thumb">
                <div class="embed-responsive embed-responsive-4by3 producto-thumb">
                    <img src="assets/img/{$imagen}.jpg" alt="" class="embed-responsive-item">
                    <div class="embed-responsive-item">
                        <div class="p-3 thumbnal-overlay-footer{$tipo} h4 m-0"><div class="span m-2">{$contenido['peso']}</div></div>
                    </div>
                </div>
            </div>
            <div class="producto-footer">
                <div class="">{$contenido['marca']} <br/> {$contenido['modelo']}</div>
            </div>
            <div class="producto-footer">
                <div class="">
                    {$contenido['pie']}
                </div>
            </div>
        </div>
HTML;

}
