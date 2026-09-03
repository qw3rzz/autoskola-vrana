@extends('layouts.app')

@section('title', 'Administrace | Autoškola Vrána')

@section('content')

    <section style="padding: 140px 32px 80px; max-width: 960px; margin: 0 auto;">
        <h1 style="font-family:'Barlow Condensed'; text-transform:uppercase; font-size:36px; margin-bottom:10px;">
            Vítej v administraci, {{ auth()->user()->name }}
        </h1>
        <p style="color:#666; margin-bottom:30px;">Jsi přihlášený jako {{ auth()->user()->email }}.</p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-red" style="border:none;cursor:pointer;">Odhlásit se</button>
        </form>

        <p style="margin-top:40px; color:#999; font-size:14px;">
            Sem postupně přidáme správu instruktorů, vozů a recenzí.
        </p>
    </section>

@endsection
