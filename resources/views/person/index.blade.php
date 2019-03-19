@extends('layout.main')


@section('content')
        @if ($people->count() > 0)
        <div class="container">
            <div class="columns">
              <div class="column is-12">
                @foreach($people as $person)
                    <div class="column">
                        @include('components.person')
                    </div>
                @endforeach
              </div>
            </div> 
        </div>   
        @else
            <section class="hero is-info">
                <div class="hero-body has-text-centered">
                  <div class="container">
                    <h1 class="title">
                       Whoops
                    </h1>
                    <h2 class="subtitle">
                        Looks like no people have been added yet
                    </h2>
                    <div class="container">
                        <h2 class="subtitle">Whould you like to</h2>
                        <a href="{{ route('people.create') }}" class="button is-link" style="padding-top:-10px">add one ?</a>
                    </div>
                  </div>
                </div>
            </section>
        @endif
        @include('components.alert')
@endsection
