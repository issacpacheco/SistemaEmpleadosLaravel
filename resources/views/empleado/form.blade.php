
<h1>{{$modo}} empleado</h1>
@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif
<div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" value="{{isset($empleado->nombre)?$empleado->nombre:old('nombre')}}">

</div>
<div class="form-group">
    <label for="Paterno">Paterno</label>
    <input type="text" class="form-control" name="paterno" value="{{isset($empleado->paterno)?$empleado->paterno:old('paterno')}}">

</div>
<div class="form-group">
    <label for="Materno">Materno</label>
    <input type="text" class="form-control" name="materno" value="{{isset($empleado->materno)?$empleado->materno:old('materno')}}">

</div>
<div class="form-group">
    <label for="Correo">Correo</label>
    <input type="email" class="form-control" name="correo" value="{{isset($empleado->correo)?$empleado->correo:old('correo')}}">

</div>
<div class="form-group">
    <label for="Foto"></label>


    @if(isset($empleado->foto))
    <img src="{{ asset('storage').'/'.$empleado->foto }}" width="100" alt="">
    @endif

    <input type="file" name="foto" class="form-control">

</div>
<a href="{{url('empleado/index')}}" class="btn btn-primary">Regresar</a>
<input type="submit" value="{{$modo}} datos" class="btn btn-success">