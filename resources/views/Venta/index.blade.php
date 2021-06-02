@extends('layouts.layout')
@section('content')
<div class="row">
 <section class="content">
 <div class="col-md-8 col-md-offset-2">
 <div class="panel panel-default">
 <div class="panel-body">
 <div class="pull-left"><h3>Lista ventas</h3></div>
 <div class="pull-right">
 <div class="btn-group">
 <a href="{{ route('venta.create') }}" class="btn btn-info" >Añadir Ventas</a>
 </div>
 </div>
 <div class="table-container">
 <table id="mytable" class="table table-bordred table-striped">
 <thead>
 <th>Resumen</th>
 <th>Fecha</th>
 <th>Tipo de Pago</th>
 <th>Monto</th>
 <th>Editar</th>
 <th>Eliminar</th>
 
 </thead>
 <tbody>
 @if($ventas->count())
 @foreach($ventas as $venta)
 <tr>
 <td>{{$venta->resumen}}</td>
 <td>{{$venta->fecha}}</td>
 <td>{{$venta->tipo_pago}}</td>
 <td>{{$venta->monto}}</td>
 <td><a class="btn btn-primary btn-xs" href="{{route('venta.edit', $venta->id)}}" > <span class="glyphicon glyphicon-pencil"></span></a></td>


 <td>
 <form action="{{url('/venta/'.$venta->id)}}" method="post" >
 {{csrf_field()}}
 <input name="_method" type="hidden" value="DELETE">
 <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
 </td>
 </tr>
 @endforeach
 @else
 <tr>
 <td colspan="8">No hay registro !!</td>
 </tr>
 @endif
 </tbody>
 </table>
 </div>
 </div>
 {{ $ventas->links() }}
 </div>
 </div>
</section>
@endsection