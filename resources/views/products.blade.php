@extends('layouts.app')
@section('title', 'Products')
@section('content')
<ul>
@foreach ($products as $product)
<li>{{ $product->name }}</li>
@endforeach
</ul>
@endsection