@extends('layouts.app')

@section('content')
<div class="container">
    <div class="alert alert-success">
        Selamat datang, {{ Auth::user()->name }}!
    </div>
</div>
@endsection
