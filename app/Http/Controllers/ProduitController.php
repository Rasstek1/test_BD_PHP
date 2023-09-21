<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Produit;

// Assurez-vous d'importer le modèle Produit

class ProduitController extends Controller
{
    public function index()
    {
        return view('index', ['listeProduits' => Produit::all()]); // Variable listeProduits qui contient tous les produits
    }

    public function ajouter()//cree nouveau produit
    {
        $produit = new Produit();
        $produit->nom = 'Char';
        $produit->prix = 1000;
        $produit->quantite = 1;
        $produit->save();//sauvegarde dans la base de donnees

        return listeProduit::all)//redirige vers la route produits::all

    }
}
