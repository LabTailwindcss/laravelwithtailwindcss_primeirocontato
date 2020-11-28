@extends('layouts.master')
@section('title', 'login')


<div class="bg-gradient-to-b from-blue-400 to-blue-200 h-screen">
    <div class="relative grid grid-cols-3">
        <div class="col-start-2 col-span-24 mt-24">
            <div class="bg-white shadow-md flex flex-col my-2 px-8 pt-6 pb-8 mb-4">
                <form action="{{route('register')}}" method="POST">
                    @csrf

                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2">E-mail</label>
                            <input type="email" class="appearance-none block w-full bg-gray-200 border border-gray-200 rounded py-3 px-4 mb-3 focus:outline-none focus:bg-gray-50" name="email">
                        </div>
                    </div>


                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-500 text-xs font-bold mb-2">Senha</label>
                            <input type="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 focus:outline-none focus:bg-gray-50" name="password">
                        </div>
                    </div>

                    <div class="pt-5">
                        <button type="submit" class="bg-blue-500 w-full hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
