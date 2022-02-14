<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;
use App\usuarios;

class PDFController extends Controller
{


    public function PDFUsuarios(){

    	$usuario = Usuario::all();
    	$pdf = PDF::loadView('usuarios', compact('usuarios'));
    	return $pdf->stream('usuarios.pdf');
    }
}