@extends('layouts.master', ['myTitle' => 'Show List'])

@section('content')
    <h1>My shopping list</h1>
    <ol>
    @foreach($products as $product)
        <li>{{$product->name}} : {{$product->number}}</li>
    @endforeach
    </ol>
@stop
