@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Editar Usuário</h1> <br>

    <form action="{{route('user.update', ['id' => $user->id])}}" method="post">
        {{csrf_field()}}
        <p class="form-group">
            <label>Nome do Usuário</label>
            <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif">
            @if($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>E-mail</label>
            <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" value="{{$user->email}}">
            @if($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{$errors->first('email')}}</strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Senha</label>
            <input type="password" name="password" class="form-control @if($errors->has('password')) is-invalid @endif">
            @if($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{$errors->first('password')}}</strong>
                </span>
            @endif
        </p>
        <p class="form-group">
            <label>Confirmar Senha</label>
            <input type="password" name="password_confirmation" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif">
            @if($errors->has('password_confirmation'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{$errors->first('password_confirmation')}}</strong>
                </span>
            @endif
        </p>
        <p>
            <input type="submit" class="btn btn-success" value="Atualizar Usuário">
        </p>
    </form>
</div>
@endsection