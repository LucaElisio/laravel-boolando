@extends('layouts.app')

@section('content')

    <h1 class="text-center">Home page</h1>


    <div class="container">
        <div class="row g-2">
            @foreach ($products as $product)  
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h4>{{$product['name']}}</h4>
                        <img class="img-fluid"  src="{{Vite::asset('resources/views/img/'.$product["frontImage"])}}" alt="">
                        <ul>
                            @foreach ($product['badges'] as $badge)
                                <li class="{{$badge['type'] === 'tag' ? 'bg-success' : 'bg-danger'}}">
                                    {{$badge['value']}}    
                                </li>    
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection