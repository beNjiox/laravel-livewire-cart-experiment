@extends('layouts.app')

@section('content')
    <livewire:catalog :products="$products"/>

    <livewire:home-product-list :products="$products"/>
@endsection
