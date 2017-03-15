@extends('layouts.app')

@section('bonjour')
    @include('layouts.elements.bonjour')
@endsection

@section('content')
    <div class="coucou" ></div>
    @include('layouts.elements.profil')

    @include('layouts.elements.competences')
    @include('layouts.elements.experiences')
    @include('layouts.elements.contact')

    @include('layouts.elements.footer')
      @endsection
