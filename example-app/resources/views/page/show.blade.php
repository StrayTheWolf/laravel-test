@extends('layouts.app')

@section('title', $page->title)

@section('content')

    <h1>
        {{$page->title}}
    </h1>

    <a href="{{route('page')}}">
        Назад к списку страниц
    </a>

    <table border="1">
        <tbody>
        <tr>
            <td>
                Имя страницы
            </td>
            <td>
                {{$page->title}}
            </td>
        </tr>

        <tr>
            <td>
                Контент
            </td>
            <td>
                {{$page->body}}
            </td>
        </tr>

        </tbody>
    </table>
@endsection
