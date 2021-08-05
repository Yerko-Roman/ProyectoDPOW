<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalController extends Controller
{
    public function getRegiones(){
        $regiones = array();
        $regiones[] = "XV-Arica y Parinacota";
        $regiones[] = "I-Tarapaca";
        $regiones[] = "II-Antofagasta";
        $regiones[] = "III-Atacama";
        $regiones[] = "IV-Coquimbo";
        $regiones[] = "V-Valpariso";
        $regiones[] = "RM-Metropolitana de Santiago";
        $regiones[] = "VI-OHiggins";
        $regiones[] = "VII-El Maule";
        $regiones[] = "VIII-El BioBio";
        $regiones[] = "IX-La Araucania";
        $regiones[] = "X-Los Lagos";
        $regiones[] = "XI-Aysen";
        $regiones[] = "XII-Magallanes";
        $regiones[] = "XIV-Los Rios";

        return $regiones;
    }

    
}
