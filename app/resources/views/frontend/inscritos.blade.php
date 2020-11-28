@extends('layouts.master')
@section('title','Lista de inscritos')

@section('content')

<div class="fixed grid grid-cols-1">
    <img src="{{asset('assets/img/background-register.png')}}" alt="background-page" class="">
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
                            <th class="border px-4 py-2">Data Nascimento</th>
                            <th class="border px-4 py-2">Telefone</th>
                            <th class="border px-4 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">Paul Victor</td>
                            <td class="border px-4 py-2">pvictor@gmail.com</td>
                            <td class="border px-4 py-2">14/11/1984</td>
                            <td class="border px-5 py-2">(88) 97541325 </td>
                            <td class="border px-5 py-2"> Ativo </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
