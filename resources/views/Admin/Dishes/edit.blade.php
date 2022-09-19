@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Modifica Piatto {{ $dish->title }}</h1>
                    <a href="{{ route('admin.dishes.index') }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-activity">
                            <line x1="20" y1="12" x2="4" y2="12"></line>
                            <polyline points="10 18 4 12 10 6"></polyline>
                        </svg> Tutti i piatti
                    </a>
                </div>

                <form action="{{ route('admin.dishes.update', ['dish' => $dish->slug]) }}" method="dish"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="cover_img_file" class="form-label">Immagine di copertina</label>
                            <input type="file" name="cover_img"
                                class="form-control h-100 @error('cover_img') is-invalid @enderror" id="cover_img_file"
                                value="{{ old('cover_img', $dish->cover_img) }}">
                        </div>
                        @error('cover_img')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nome Piatto</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                            placeholder="Inserisci il titolo" value="{{ old('title', $dish->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Descrizione Piatto</label>
                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10"
                            placeholder="Inizia a scrivere qualcosa..." required>{{ old('content', $dish->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="black" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-activity">
                                <path d="M19 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11l5 5v11a2 2 0 0 1-2 2z"></path>
                                <polyline points="17 21 17 13 7 13 7 21"></polyline>
                                <polyline points="7 3 7 8 15 8"></polyline>
                            </svg> Salva dish
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection