@extends('layouts.app')

@section('title', 'Login Page')

@section('content')
   <div>
       <form action="{{route('login.post')}}" method="post">
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
               <label>
                   Логин (адрес почты)
                   <input type="email" name="email" value="{{old('email')}}">
               </label>
           </div>

           <div>
               <label>
                   Пароль
                   <input type="password" name="password">
               </label>
           </div>

           <button>
               Войти
           </button>
       </form>

       <form action="{{route('user.create')}}" method="get">

           <button>
               Зарегистророваться
           </button>

       </form>
   </div>
@endsection
