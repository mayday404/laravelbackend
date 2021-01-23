@extends('layouts.master')

@section('content')

	@include('layouts.comptable')

	<a class="btn btn-default" href="{{ route('reports') }}">Back To Reports..</a>

@endsection