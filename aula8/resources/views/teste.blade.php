@extends('layouts.app')

@section('content')
  @guest
    <div class="container">
      <div class="row justify-content-center">
        <h1>Not logged yet sorry :(</h1>
      </div>
    </div>
  @else
    <div class="container">
      <div class="row justify-content-center">
        <h1>Logged :(</h1>
      </div>
    </div>
  @endguest
@endsection
