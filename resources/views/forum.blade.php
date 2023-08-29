@extends('LayoutsForum.footer')
@section('contentfooter')
@endsection

@extends('LayoutsForum.contactezPulcherie')
@section('content')
@endsection

@extends('LayoutsForum.Formation')
@section('contentformation')
@endsection

@extends('LayoutsForum.forumPulcherie')
@section('contenuforum')
@endsection


   @include('LayoutsForum.navbar') <!-- Inclut la barre de navigation -->
    <div class="container">
        @yield('contentApp') <!-- Insère le contenu spécifique de chaque vue enfant ici -->
    </div> 
    <script src="{{ asset('css/js/all.min.js') }}"></script>
