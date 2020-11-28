@extends('layouts.master')

@section('title','Newsletter')

@section('content')
    <div class="">
        <img src="{{asset('assets/img/background.png')}}" alt="imagem-fundo" class="max-h-screen float-right">
    </div>
    <div class="py-16 ml-32">
        <h3 class="text-6xl font-black">PWcódigo</h3>
    </div>
    <div class="pt-32 ml-32">
        <h4 class="text-5xl font-bold break-words"> Assine nosso newsletter </h4>
        <p class="font-semibold">Acompanhe todas as novidades da tecnologia</p>
    </div>
    <div class="pt-10 ml-32">
        <a href="{{ URL::to('/cadastro')}}">
            <button class="bg-blue-500 w-48 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Registrar</button>
        </a>
        <a href="{{ URL::to('/inscritos')}}">
            <button class="bg-gray-500 w-48 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full">Inscritos</button>
        </a>
    </div>
@endsection
