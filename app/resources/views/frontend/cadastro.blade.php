@extends('layouts.master')
@section('title', 'Cadastro')

@section('content')

 <div class="fixed grid grid-cols-1">
    <img src="{{asset('assets/img/background-register.png')}}" alt="" class="">
 </div>
 <div class="relative grid grid-cols-4">
     <div class="col-start-2 col-span-2 mt-24">
        <div class="bg-white shadow-md rounded flex flex-col my-2 px-8 pt-6 pb-8 mb-4">
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label for="Name">Nome</label>
                    <input type="text" class="appearance-none block w-full bg-gray-100 text-gray-500 border rounded py-3 px-4 mb-3" placeholder="Digite o seu nome">
                </div>
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class"" for="">Sobrenome</label>
                    <input type="text" class="appearance-none block w-full bg-gray-100 text-gray-500 border rounded py-3 px-4 mb-3" placeholder="Digite o seu sobrenome">
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3 mb-6 mb:mb-0">
                    <label class="" for="">Email</label>
                    <input type="text" class="appearance-none block w-full bg-gray-100 text-gray-500 border rounded py-3 px-4 mb-3" placeholder="Digite o seu e-mail">
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="" for="">Data de Nascimento</label>
                    <input type="text" class="appearance-none block w-full bg-gray-100 text-gray-500 border rounded py-3 px-4 mb-3" placeholder="dd/mm/yyyy">
                </div>
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="" for="">Telefone</label>
                    <input type="text" class="appearance-none block w-full bg-gray-100 text-gray-500 border rounded py-3 px-4 mb-3" placeholder="(xx) x-xxxx-xxxx">
                </div>
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="">Endereço</label>
                    <input type="text" class="appearance-none block w-full bg-gray-100 text-gray-500 border rounded py-3 px-4 mb-3" placeholder="Digite o seu endereço">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
