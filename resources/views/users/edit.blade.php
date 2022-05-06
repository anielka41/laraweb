@extends('layouts.app')

@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-4"><strong>Edycja Użytkownika: {{ $user->name }}</strong></h1>
        </div>

        <form method="post" action="{{route('users.update', $user->id)}}">
            {{ csrf_field() }}
            {{ method_field('patch') }}

            <input type="text" name="name"  value="{{ $user->name }}" />
            <input type="email" name="email"  value="{{ $user->email }}" />
            <input type="password" name="password" />
            <input type="password" name="password_confirmation" />
            <button type="submit">Send</button>
        </form>

    </main>
@endsection

@section('javascript')

@endsection
