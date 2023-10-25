@extends('layouts.auth')

    @section('page.title', 'Страница входа')



    @section('auth.content')

        <x-card>
            <x-card-header>
                <x-card-title>
                    {{__('Вход')}}
                </x-card-title>
                <x-slot name="right">
                    <a href="{{route('register')}}">Регистрация</a>
                </x-slot>
            </x-card-header>
            <x-card-body>
                <x-form action="{{route('login.store')}}" method="POST">
                    <x-form-itam class="mb-3">
                        <x-label required>{{__('Email')}}</x-label>
                        <x-input autofocus type="email" name="email"/>
                    </x-form-itam>
                    <x-form-itam class="mb-3">
                        <x-label class="required" >{{__('Пороль')}}</x-label>
                        <x-input type="password" name="password"/>
                    </x-form-itam>
                    <x-form-itam class="mb-3">
                        <x-checkbox type="checkbox" name="remember">
                            {{__('Запомнить меня')}}
                        </x-checkbox>
                    </x-form-itam>
                    <x-button type="submit">{{__('Войти')}}</x-button>
                </x-form>
            </x-card-body>
        </x-card>

    @endsection
