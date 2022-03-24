@extends('layouts.app')

@section('title', 'Admin - Creation reservation')

@section('content')
<h1> Admin - Creation reservation </h1>
<form action="{{route('admin.reservation.store')}}" method="post">
    @include('admin.reservation._form')
</form>

@endsection