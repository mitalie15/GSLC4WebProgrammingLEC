@extends('template')

@section('name', 'Home Page')

@section('content')
<h1>Welcome, Mita</h1>
<h3 style="color: grey;">I hope you enjoy today's food</h3>
<div class="row mt-4">
    @foreach($data as $footData)
      <div class="col-md-2 mb-2 mt-5">
        <div class="card">
            <img src="{{ $footData['photo']}}" style="max-width: max-content;" height="200px"> 
            <div class="card-body">
              <p style="font-weight: bold;">{{ $footData['name']}}</p>
              <p>{{ $footData['price']}}</p>
              @switch($footData['origin'])
              @case("Japan" || "Indonesia")   
                <p>Asian Cuisine</p>   
                  @break
              @case("Italia")      
                <p>Western Cuisine</p>
                  @break
              @endswitch
            </div>
        </div>
      </div>
    @endforeach
</div>
@endsection