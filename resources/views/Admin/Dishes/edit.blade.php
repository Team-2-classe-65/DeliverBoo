@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Modifica post {{ $post->title }}</h1>
                    <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-activity">
                            <line x1="20" y1="12" x2="4" y2="12"></line>
                            <polyline points="10 18 4 12 10 6"></polyline>
                        </svg> Tutti i posts
                    </a>
                </div>

                <form action="{{ route('admin.posts.update', ['post' => $post->slug]) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="cover_img_file" class="form-label">Immagine di copertina</label>

                        <div class="d-flex align-items-center">
                            @if($post->cover_img) 
                                <img class="img-thumbnail" style="width: 150px"
                                src="{{ asset('storage/' . $post->cover_img) }}">
                            @else 
                                <img class="img-thumbnail" style="width: 150px"
                                src="https://www.idmore.it/wp-content/uploads/2016/12/ef3-placeholder-image.jpg" alt="">
                            
                            @endif

                            <input type="file" name="cover_img"
                                class="form-control h-100 ms-2 @error('cover_img') is-invalid @enderror" id="cover_img_file"
                                value="{{ old('cover_img', $post->cover_img) }}">
                        </div>
                        @error('cover_img')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                            placeholder="Inserisci il titolo" value="{{ old('title', $post->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contenuto</label>
                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" rows="10"
                            placeholder="Inizia a scrivere qualcosa..." required>{{ old('content', $post->content) }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Categoria</label>
                        <select type="text" name="category_id"
                            class="form-control @error('category_id') is-invalid @enderror"
                            placeholder="Inserisci il titolo">
                            <option value=""></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $post->category_id) === $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tags</label>
                        <select type="text" name="tags[]" class="form-control @error('tags') is-invalid @enderror"
                            multiple>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}" {{ $post->tags->contains($tag) ? 'selected' : '' }}>
                                    {{ $tag->name }}</option>
                            @endforeach
                        </select>
                        @error('tags')
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
                            </svg> Salva post
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection