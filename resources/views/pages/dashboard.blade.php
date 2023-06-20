@extends('layouts.app')
@section('content')
    <div class="pt-4 mx-5">
        <h1>Welcome {{ session('name') }}</h1>
    </div>
@endsection
