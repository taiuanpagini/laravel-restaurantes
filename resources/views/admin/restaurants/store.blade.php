@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Inserindo Restaurante</h1> <br>
    {{--{{var_dump($errors->all())}}--}}
    <form action="{{route('restaurant.store')}}" method="post">
        {{csrf_field()}}
        <p class="form-group">
            <label>Nome</label>
            <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" value="{{old('name')}}">
            @if($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Endereço</label>
            <input type="text" name="address" class="form-control @if($errors->has('address')) is-invalid @endif" value="{{old('address')}}">
            @if($errors->has('address'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{$errors->first('address')}}</strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Descrição do Restaurante</label>
            <textarea name="description" class="form-control @if($errors->has('description')) is-invalid @endif" id="" cols="30" rows="10">{{old('description')}}</textarea>
            @if($errors->has('description'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{$errors->first('description')}}</strong>
                </span>
            @endif
        </p>
        <p>
            <input type="submit" class="btn btn-success" value="Cadastrar Restaurante">
        </p>
    </form>
</div>
@endsection