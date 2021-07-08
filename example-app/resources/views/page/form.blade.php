@extends('layouts.app')

@section('title', 'Create User Page')

@section('content')
    <form action="{{route('page.store')}}" method="post">
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

        <div>
            <a href="{{route('page')}}">
                Назад
            </a>
        </div>

        <div>
            <label>
                Имя страницы
                <input type="text" name="title" value="{{isset($page) ? $page->title : old('title')}}">
            </label>
        </div>
        <div>
            <label>
                Контент
                <input type="text" name="body" value="{{isset($page) ? $page->body : old('body')}}">
            </label>
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
