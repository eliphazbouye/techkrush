@extends('layouts.app')

@section('content')

<x-categories />
<h1>Welcome to {{ config('app.name', 'Laravel') }}</h1>
<p>This is the home page.</p>

@endsection