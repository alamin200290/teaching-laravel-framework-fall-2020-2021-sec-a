@extends('layout/navbar')

@section('head')
	Welcome home
@endsection

@section('content')
	<br>
	<br>
	ID: {{$id}} <br>
	Name: {{$name}}
@endsection

@section('title')
Home Page
@endsection
