<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiaController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $data
     * @return \Illuminate\Http\Response
     */
    public function show($data)
    {
        $diasemana = array('Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado');
        
        $diasemana_numero = date('w', strtotime($data));
        
        echo "A data informada no calendário cai em um dia de " . $diasemana[$diasemana_numero];    
    }
}
