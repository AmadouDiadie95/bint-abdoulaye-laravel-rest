<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    //
    public function index()
    {
        return Commande::all();
    }
 
    public function show($id)
    {
        return Commande::find($id);
    }

    public function store(Request $request)
    {
        return Commande::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $Commande = Commande::findOrFail($id);
        $Commande->update($request->all());

        return $Commande;
    }

    public function delete(Request $request, $id)
    {
        $Commande = Commande::findOrFail($id);
        $Commande->delete();

        return 204;
    }
}
