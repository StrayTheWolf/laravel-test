@extends('layouts.app')

@section('title', $user->name)

@section('content')

    <h1>
        {{$user->name}}
    </h1>

    <a href="{{route('user')}}">
        Назад к списку пользователей
    </a>

    <table border="1">
        <tbody>
        <tr>
            <td>
                Имя
            </td>
            <td>
                {{$user->name}}
            </td>
        </tr>

        <tr>
            <td>
                Фамилия
            </td>
            <td>
                {{$user->last_name}}
            </td>
        </tr>

        <tr>
            <td>
                Отчество
            </td>
            <td>
                {{$user->patronymic}}
            </td>
        </tr>

        <tr>
            <td>
                Электронная почта
            </td>
            <td>
                {{$user->email}}
            </td>
        </tr>

        <tr>
            <td>
                Номер телефона
            </td>
            <td>
                {{$user->phone}}
            </td>
        </tr>
        </tbody>
    </table>
@endsection
