<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create() {
//restituisce una vista che contiene il form di inserimento dei dati
//presa dal folder product con il file della vista create
        return view('product.create');
    }
//collegata ad una rotta post non restituisce nessuna vista
    public function store(Request $request) {
        dd($request->all());
    }
}
