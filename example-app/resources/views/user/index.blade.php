@extends('layouts.app')

@section('title', 'Users Page')

@section('content')
   <h1>
       Страница пользователей
   </h1>

   <a href="{{route('user.create')}}">
       Добавить нового пользователя
   </a>

    <table border="1">
        <thead>
        <tr>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Редактирование</th>
        </tr>
        </thead>

        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a href="{{route('user.show', ['id'=>$user->id])}}">
                        {{$user->name}}
                    </a>
                </td>
                <td>
                    {{$user->last_name}}
                </td>

                <td>
                    <a href="{{route('user.edit', ['id'=>$user->id])}}">
                        Редактировать
                    </a>

                    <form action="{{route('user.delete', ['id'=>$user->id])}}" method="post">
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
