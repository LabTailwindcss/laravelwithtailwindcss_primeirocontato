@extends('layouts.master')
@section('title','Lista de inscritos')

@section('content')
@if(Route::has('login'))
    @auth
<div class="bg-gradient-to-b from-blue-400 to-blue-200 h-screen">
    <div class="fixed grid grid-cols-1">
        <!-- <img src="{{asset('assets/img/background-register.png')}}" alt="background-page" class=""> -->
    </div>
        <div class="relative grid">
            <div class="mt-5 ml-5 mr-5">
                <div class="bg-white shadow-md rounded flex flex-col my-2 px-8 pb-8 mb-4">
                    <h3 class="font-semibold py-5 text-xl">Lista de Inscritos</h3>
                    <table class="table-auto">
                        <thead>
                            <tr class="text-left">
                                <th class="border px-4 py-2">Nome</th>
                                <th class="border px-4 py-2">E-mail</th>
                                <th class="border px-4 py-2">Cidade</th>
                                <th class="border px-4 py-2">Telefone</th>
                                <th class="border px-4 py-2">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inscritos as $inscrito)
                            <tr>
                                <td class="border px-4 py-2">{{$inscrito->name}}</td>
                                <td class="border px-4 py-2">{{$inscrito->email}}</td>
                                <td class="border px-4 py-2">{{$inscrito->city}}</td>
                                <td class="border px-5 py-2">{{$inscrito->phone}}</td>
                                <td class="border px-5 py-2"> {{$inscrito->status}} </td>
                            </tr>
                            @break
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endauth
    @else



                <div class="max-w-sm mx-auto">
                        <div class="flex mt-20">
                            <div class="flex items-center justify-center flex-wrap">
                                <div class="flex justify-center">
                                    <img class="w-1/2" src="{{asset('assets/img/www.svg')}}" alt="">
                                </div>
                                <div class="flex justify-center">
                                    <h1 class="uppercase font-bold">Acesso não autorizado - 401</h1>
                                </div>
                                <div class="flex items-center justify-start">
                                    <a href="{{ URL::to('/')}}">
                                        <button class="bg-blue-600 text-white font-bold rounded-full px-3 py-3 hover:bg-blue-800">
                                                <div class="flex items-center">
                                                    <div class="w-3 h-3 text-left">
                                                        <svg className="" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clipRule="evenodd" /></svg>
                                                    </div>
                                                    <div class="text-right">
                                                        Página inicial
                                                    </div>
                                                </div>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>




@endif
@endsection
