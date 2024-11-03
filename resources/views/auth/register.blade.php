@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5 ">
            <img src="{{ asset('img/registrar.jpg') }}" alt="Registro de usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-2xl">
            <form action="">
                <div class="mb-5">
                    <label for="nombre" class="mb-2 block uppercase text-gray-500 font-bold" for="">
                        Nombre
                    </label>
                    <input 
                        id="nombre"
                        name="name"
                        type="text"
                        placeholder="Tu nombre"
                        class="border p-3 w-full rounded-lg">

                </div>

                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold" for="">
                        Username
                    </label>
                    <input 
                        id="username"
                        name="Username"
                        type="text"
                        placeholder="Tu nombre de usuario"
                        class="border p-3 w-full rounded-lg">

                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold" for="">
                        Email
                    </label>
                    <input 
                        id="email"
                        name="email"
                        type="text"
                        placeholder="Tu Email de Registro"
                        class="border p-3 w-full rounded-lg">

                </div>

                
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold" for="">
                        Password
                    </label>
                    <input 
                        id="password"
                        name="password"
                        type="password"
                        placeholder="Password de registro"
                        class="border p-3 w-full rounded-lg">

                </div>

                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold" >
                        Repetir Password
                    </label>
                    <input 
                        id="password_confirmation"
                        name="password_confirmation"
                        type="password"
                        placeholder="Repite tu Password"
                        class="border p-3 w-full rounded-lg">

                </div>

                <input 
                
                type="submit"
                value="Crear Cuenta"
                class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold 
                w-full p-3 text-white rounded-lg"
                
                >
            </form>

        </div>
    </div>

@endsection