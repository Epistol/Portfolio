@extends('layouts.app')

@section('bonjour')
    @include('layouts.elements.bonjour')
@endsection

@section('content')
    <div class="coucou"></div>
    @include('layouts.elements.profil')

    @include('layouts.elements.competences')
    @include('layouts.elements.experiences')
    @include('layouts.elements.galerie')
    @include('layouts.elements.cv')
    @include('layouts.elements.reseaux')

    @include('layouts.elements.footer')
      @endsection
