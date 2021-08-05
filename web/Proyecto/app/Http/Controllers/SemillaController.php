<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SemillaController extends Controller
{
    public function getTipos(){
        $tipos = array();
        $tipos[] = "Automatica";
        $tipos[] = "Ferminizada";
        $tipos[] = "Regulares";

        return $tipos;
    }
}
