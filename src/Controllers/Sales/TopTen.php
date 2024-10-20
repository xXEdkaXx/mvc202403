<?php

namespace Controllers\Sales;

use Controllers\PublicController;
use Views\Renderer;

class TopTen extends PublicController
{
    public function run() : void {
        $viewData = [
            "nombre_programado" => 'Eduardo Alvarado',
            "clases" => [
                "Programación de Portales Web I",
                "Programación de Portales Web II",
                "Programación de Negocios Web"
            ],
            "contactos" => [
                [
                    "nombre" => "Fulano de tal",
                    "telefono" => "99884455"
                ],
                [
                    "nombre" => "Mengano de tal",
                    "telefono" => "77889944"
                ],
                [
                    "nombre" => "Sutano de tal",
                    "telefono" => "11223344"
                ]
            ]
        ];

        if( $this->isPostBack()) {
            $txtNombre = $_POST["txtNombre"];
            $rsltMessege = strtoupper($txtNombre) . " Procesado!!!!!";
            $viewData["txtNombre"] = $txtNombre;
            $viewData["rsltMessege"] = $rsltMessege;
        }

        Renderer::render('sales/top10', $viewData);
    }    
}