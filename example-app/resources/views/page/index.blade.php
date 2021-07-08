@extends('layouts.app')

@section('title', 'Edit Page')

@section('content')
    <h1>
        Создание и редактирование страниц
    </h1>

    <a href="{{route('page.create')}}">
        Создать новую страницу
    </a>

    <table border="1">
        <thead>
        <tr>
            <th>Имя страницы</th>
            <th>Контент</th>
            <th>Редактирование</th>
        </tr>
        </thead>

        <tbody>
        @foreach($pages as $page)
            <tr>
                <td>
                    <a href="{{route('page.show', ['id'=>$page->id])}}">
                        {{$page->title}}
                    </a>
                </td>
                <td>
                    {{$page->body}}
                </td>

                <td>
                    <a href="{{route('page.edit', ['id'=>$page->id])}}">
                        Редактировать
                    </a>

                    <form action="" method="post">
                        @csrf
                        @method('DELETE')
                        <button>
                            Удалить
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
