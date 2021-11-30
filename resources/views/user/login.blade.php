@extends('layouts.layout')

@section('title')
    @parent:: Авторизация
@endsection

@section('content')
    <section class="py-2 text-center container">
        <div class="row py-lg-2">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Авторизация</h1>
            </div>
        </div>
    </section>
    <section class="py-5 container">
        <div class="album py-3 bg-light">
            <div class="container">
                <form class="row gy-2 gx-3 align-items-center" action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="email">Электронная почта</label>
                        <input type="email" class="form-control mt-3 @error('email') is-invalid @enderror" id="email" name="email"
                               placeholder="Укажите почту..." value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <label for="password">Пароль</label>
                        <input type="password" class="form-control mt-3 @error('password') is-invalid @enderror" id="password" name="password"
                               placeholder="Укажите пароль...">
                        @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row mb-3">
                    <div class="row mb-3">
                        <button type="submit" class="btn btn-primary">Авторизоваться</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>

@endsection
