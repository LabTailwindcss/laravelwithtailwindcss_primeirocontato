@extends('layouts.master')
@section('title', 'Cadastro')

@section('content')

 <div class="fixed grid grid-cols-1">
    <img src="{{asset('assets/img/background-register.png')}}" alt="" class="">
 </div>
 <div class="relative grid grid-cols-4">
     <div class="col-start-2 col-span-2 mt-24">
        <div class="bg-white shadow-md rounded flex flex-col my-2 px-8 pt-6 pb-8 mb-4">
            <form  method="POST" action="{{route('register')}}">
                @csrf
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nome</label>
                    <input type="text" name="name" class="appearance-none block w-full bg-gray-200 text-gray-500 border rounded py-3 px-4 mb-3" placeholder="Digite o seu nome">
                </div>
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label for="firstname" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >Sobrenome</label>
                    <input type="text" name="firstname" class="appearance-none block w-full bg-gray-200 text-gray-500 border rounded py-3 px-4 mb-3" placeholder="Digite o seu sobrenome">
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3 mb-6 mb:mb-0">
                    <label for="email" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >Email</label>
                    <input type="email" name="email" class="appearance-none block w-full bg-gray-200 text-gray-500 border rounded py-3 px-4 mb-3" placeholder="Digite o seu e-mail" required>
                </div>
            </div>
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label for="birthday" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" >Data de Nascimento</label>
                    <input type="text" name="birthday" class="appearance-none block w-full bg-gray-200 text-gray-500 border rounded py-3 px-4 mb-3" placeholder="dd/mm/yyyy">
                </div>
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label for="phone" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Telefone</label>
                    <input type="text" name="phone" class="appearance-none block w-full bg-gray-200 text-gray-500 border rounded py-3 px-4 mb-3" placeholder="(xx) x-xxxx-xxxx">
                </div>
                <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                    <label for="city" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Cidade</label>
                    <input type="text" name="city" class="appearance-none block w-full bg-gray-200 text-gray-500 border rounded py-3 px-4 mb-3" placeholder="Digite a sua cidade">
                </div>
            </div>
            <div class="pt-5">
                <button type="submit" class="bg-blue-500 w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Cadastrar</button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
