@extends('layouts.layout')
@section('content')
<div class="row">
<section class="content">
	 	 <div class="col-md-8 col-md-offset-2">
	 	 	 @if (count($errors) > 0)
	 	 	 <div class="alert alert-danger">
	 	 	 	 <strong>Error!</strong> Revise los campos obligatorios.<br><br>
	 	 	 	 <ul>
	 	 	 	 	 @foreach ($errors->all() as $error)
	 	 	 	 	 <li>{{ $error }}</li>
	 	 	 	 	 @endforeach
	 	 	 	 </ul>
	 	 	 </div>
	 	 	 @endif
	 	 	 @if(Session::has('success'))
	 	 	 <div class="alert alert-info">
	 	 	 	 {{Session::get('success')}}
	 	 	 </div>
	 	 	 @endif
	 	 	 <div class="panel panel-default">
	 	 	 	 <div class="panel-heading">
	 	 	 	 	 <h3 class="panel-title">Editar Infomación del calzado</h3>
	 	 	 	 </div>
	 	 	 	 <div class="panel-body">	 	 	 	 	 

	 	 	 	 	 <div class="table-container">
	 	 	 	 	 	 <form method="POST" action="{{ route('calzado.update', $calzados->id) }}" role="form">
	 	 	 	 	 	 	 {{ csrf_field() }}
<input name="_method" type="hidden"
value="PATCH">
<div class="row">
<div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text" name="calzado" id="calzado" class="form-control input-sm" value="{{$calzados->calzado}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
										<div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text" name="tipo" id="tipo" class="form-control input-sm" value="{{$calzados->tipo}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>
<div class="row">

<div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="color" id="color" class="form-control input-sm" value="{{$calzados->color}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
<div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="talla" id="talla" class="form-control input-sm" value="{{$calzados->talla}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>


								   <div class="row">
<div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="marca" id="marca" class="form-control input-sm" value="{{$calzados->marca}}" >
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
<div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="genero" id="genero" class="form-control input-sm" value="{{$calzados->genero}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>

<div class="row">
	 	 	 	 	 	 	 	 <div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="edades" id="edades" class="form-control input-sm" value="{{$calzados->edades}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
<div class="col-xs-6 col-sm-6 colmd-6">
	 	 	 	 	 	 	 	 	 <div class="form-group">
	 	 	 	 	 	 	 	 	 	 <input type="text"
name="precio" id="precio" class="form-control input-sm" value="{{$calzados->precio}}">
	 	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 	 </div>
<div class="form-group">


								   
<div class="row">





	 	 	 	 	 	 	 	 <div class="col-xs-12 col-sm-12 colmd-12">
	 	 	 	 	 	 	 	 	 <input type="submit"
value="Actualizar" class="btn btn-success btn-block">
<a
href="{{ route('calzado.index') }}" class="btn btn-info btn-block" >Atrás</a>
	 	 	 	 	 	 	 	 </div>	 

	 	 	 	 	 	 	 </div>
	 	 	 	 	 	 </form>
	 	 	 	 	 </div>
	 	 	 	 </div>
	 	 	 </div>
	 	 </div>
</section>
@endsection