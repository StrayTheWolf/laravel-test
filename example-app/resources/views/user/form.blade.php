@extends('layouts.app')

@section('title', 'Create User Page')

@section('content')
    <form action="{{route('user.store')}}" method="post">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <input type="hidden" name="id" value="{{isset($user) ? $user->id : ''}}">

        <div>
            <a href="{{route('user')}}">
                Назад
            </a>
        </div>

        <div>
            <label>
                Имя
                <input type="text" name="name" value="{{isset($user) ? $user->name : old('name')}}">
            </label>
        </div>
        <div>
            <label>
                Фамилия
                <input type="text" name="last_name" value="{{isset($user) ? $user->last_name : old('last_name')}}">
            </label>
        </div>
        <div>
            <label>
                Отчество
                <input type="text" name="patronymic" value="{{isset($user) ? $user->patronymic : old('patronymic')}}">
            </label>
        </div>
        <div>
            <label>
                Электронная почта
                <input type="email" name="email" value="{{isset($user) ? $user->email : old('email')}}">
            </label>
        </div>
        <div>
            <label>
                Номер телефона
                <input type="text" name="phone" value="{{isset($user) ? $user->phone : old('phone')}}">
            </label>
        </div>
        <div>
            <label>
                Пароль
                <input type="password" name="password">
            </label>
        </div>
        <button type="submit">Отправить</button>
    </form>
@endsection
