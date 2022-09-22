@extends('layouts.app')

@section('content')
    @if ($dish->user->id === Auth::user()->id)
        <div class="container p-4">

            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="fw-bold text-uppercase"> {{ $dish->name }}</h1>
                        <a href="{{ route('admin.dishes.index') }}" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-activity">
                                <line x1="20" y1="12" x2="4" y2="12"></line>
                                <polyline points="10 18 4 12 10 6"></polyline>
                            </svg> <span class="d-none d-md-inline">Torna ai piatti</span>
                        </a>
                    </div>

                    @if (session()->get('message'))
                        <div class="alert alert-success mb-3">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                        <div class="row mb-3 g-3">
                            <div class="col-12 col-md">
                                @if ($dish->dish_img)
                                    <img class="img-fluid rounded w-100" src="{{ asset('storage/' . $dish->dish_img) }}"
                                        style="height: 450px;object-fit: cover">
                                @else
                                    <img class="img-fluid rounded" src="{{ asset('img/placeholder.jpg') }}" alt="">
                                @endif

                            </div>
                            <div class="col-12 col-md">
                                <dl>
                                    <dt>Nome piatto</dt>
                                    <dd>{{ $dish->name }}</dd>
                                    <dt>Slug</dt>
                                    <dd>{{ $dish->slug }}</dd>
                                    <dt>Descrizione</dt>
                                    <dd>{{ $dish->description }}</dd>
                                    <dt>Prezzo</dt>
                                    <dd>{{ $dish->price . '€' }}</dd>
                                    <dt>Disponibile</dt>
                                    <dd>
                                        @if ($dish->availability === 1)
                                            SI
                                        @else
                                            NO
                                        @endif
                                    </dd>
                                </dl>
                            </div>
                        </div>

                        <a href="{{ route('admin.dishes.edit', ['dish' => $dish->slug]) }}" class="btn btn-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-activity">
                                <polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon>
                                <line x1="3" y1="22" x2="21" y2="22"></line>
                            </svg> Modifica
                        </a>
                        <form class="d-inline-block" action="{{ route('admin.dishes.destroy', ['dish' => $dish->slug]) }}"
                            method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-activity">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg> Elimina
                            </button>
                        </form>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            {{-- <h1 class="text-center text-danger px-5">
           NON SI SCRIVE ITALIA IN VANO VICHINGO 
        </h1> --}}

            <span class="d-flex justify-content-center pt-5 w-100">
                <img src="https://c.tenor.com/J7ZL_Cryy-0AAAAd/checco-zalone-checco.gif" alt="">
            </span>

        </div>


    @endif
@endsection
