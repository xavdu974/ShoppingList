@extends('layouts.master', ['myTitle' => 'Edit List'])

@section('content')
    <h1>My editPage</h1>
    <form action='' method="POST">
        @foreach($products as $product)
        <label>{{ $product->id }} : </label>
        <input type="text" name="productName" value={{ $product->name }}>
        <input type="text" name="productNumber" value={{ $product->number }}>
        <br>
        @endforeach
    </form>
@stop