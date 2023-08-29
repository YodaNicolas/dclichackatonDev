@extends('Layouts.base')
@section('content')
    <br>
    <div class="card">
        <h3 class="card-header">Entreprises</h3>
        <div class="listeEntrep">

            @foreach ($entreps as $entrep)
                <div class="card cardEntreprise" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="..." style="height: 80px !important">
                    <div class="card-body">
                        <h5 class="card-title">{{ $entrep->nom }}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="btn btn-primary">Plus de details</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection

