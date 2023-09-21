@extends('layouts.app')

@section('content')
    <h1>Liste des produits</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantite</th>

        </tr>
        @foreach ($listeProduits as $produit)
            <tr>
                <td>{{ $listeProduits->id ?? 'No ID' }}</td>
                <td>{{ $listeProduits->nom }}</td>
                <td>{{ $listeProduits->prix }}</td>
                <td>{{ $listeProduits->quantite }}</td>

            </tr>
        @endforeach
    </table>

    {{-- Debugging Information --}}
    <pre>
        {{ dd($Produits) }}
    </pre>
@endsection
