@extends('layouts.master', ['myTitle' => 'Add Products'])

@section('content')
    <h1>My addPage</h1>

    <form action='/' method="POST">
        {{ csrf_field() }}
    <div >{{ $resultForm ?? 'hidden' }}</div>
        <input type="text" name="productName" placeholder="Saisissez votre produit">
        <input type="text" name="productNumber" value="1">
        <input type="submit" value="Valider">
    </form>
@stop