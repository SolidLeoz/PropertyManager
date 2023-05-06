<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    // controller annunci
    public function index() {
        $products=Product::all();  //all dice ad eloquent di eseguire questa queri
        return view('product.index', compact('products'));
    }
// restituisce dettaglio di ongi prodotto
    public function show(Product $product) {
        return view('product.show', compact('product'));
    }

    public function create() {
//restituisce una vista che contiene il form di inserimento dei dati
//presa dal folder product con il file della vista create
        return view('product.create');
    }
//collegata ad una rotta post non restituisce nessuna vista, chiede di retur l'uri e non la rotta.
//è inserito il codice route() perchè non possiamo richiamare blade (ci aiuta a scrivere php nella pagina html)
    public function store(ProductRequest $request) {
        // dd per la verifica dei dati che vengono passati
        // dd($request->all());

        // mass assignment per passare i dati al database

        $product = Product::create([
            'title' => $request ->title,
            'description' => $request ->description,
            // TODO: la chiave check deve essere sempre flaggata altrimenti produrrà errore e non salverà i dati nel database
            'check' => $request ->check,
            'phone' => $request ->phone,
            // essendo un file da gestire andiamo a specificare cosa riconosce e dove lo salva
            'imgProduct' => $request ->file('imgProduct')->store('public/image')
        ]);

        return redirect(route('homePage'))->with('message','hai memorizzato correttamente il dato');
    }

}
