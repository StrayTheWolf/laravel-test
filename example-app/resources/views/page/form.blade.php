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

        <input type="hidden" name="id" value="{{isset($page) ? $page->id : ''}}">

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
                <textarea name="body" id="" cols="30" rows="10">
                {{isset($page) ? $page->body : old('body')}}
            </textarea>
            </label>
        </div>
        <button type="submit">Сохранить</button>
    </form>
@endsection
