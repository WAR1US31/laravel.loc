@extends('layouts.layout')

@section('title')
    @parent:: {{ $title }}
@endsection

@section('content')
    <section class="py-2 text-center container">
        <div class="row py-lg-2">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">{!! mb_strtoupper($title) !!}</h1>
            </div>
        </div>
    </section>
    <section class="py-5 container">
        <div class="album py-3 bg-light">
            <div class="container">
                    <form class="row gy-2 gx-3 align-items-center" action="{{ route('posts.store') }}" method="post">
                        @csrf
                        <div class="row mb-3">
                            <label for="title">Заголовок</label>
                            <input type="text" class="form-control mt-3 @error('title') is-invalid @enderror" id="title" name="title"
                                   placeholder="Укажите заголовок статьи..." value="{{ old('title') }}">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="content">Содержимое</label>
                            <textarea type="text" class="form-control mt-3 @error('title') is-invalid @enderror" id="content" name="content"
                                      placeholder="Содержимое статьи..." rows="6">{{ old('content') }}</textarea>
                            @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="category_id">Категория</label>
                            <select class="form-select mt-3 @error('title') is-invalid @enderror" id="category_id" name="category_id">
                                <option>Выберите категорию...</option>
                                @foreach($categories as $k => $v)
                                    <option value="{{ $k }}"
                                    @if(old('category_id') == $k) selected @endif
                                    >{{ $v }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <button type="submit" class="btn btn-primary">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
