<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
}

<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
	//
	public function index (){
		return view('entrada');
	}

	public function listarEquipas (){
		$teams = [
			'Desportivo das Aves',
			'Moreirense',
			'Famalicão'
		];
		return view('listar-equipas');
	}

}