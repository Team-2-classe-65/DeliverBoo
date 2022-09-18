@extends('layouts.app')

@section('content')
    <div class="container p-3 h-100">
        <h1 class="mb-5">
            Benvenuto <strong>{{ Auth::user()->name }}</strong>

            <span class="ms-5">
                @foreach (Auth::user()->categories as $category)
                    {{ $category->name }}
                    @if (!$loop->last)
                        <span class="mx-1">-</span>
                    @endif
                @endforeach
            </span>

        </h1>

        <div class="row h-75">
            <div class="col">
                <a href="{{ route('admin.dishes.index') }}" class="text-uppercase">
                    <div class="card position-realtive h-100 x overflow-hidden">
                        <img src="{{ asset('img/dishes.jpg') }}" alt="" class="w-100 rounded">
                        <h2>
                            Piatti
                        </h2>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="" class="text-uppercase">
                    <div class="card position-realtive h-100 x overflow-hidden">
                        <img src="{{ asset('img/orders.jpg') }}" alt="" class="w-100 rounded">
                        <h2>
                            Ordini
                        </h2>
                    </div>
                </a>
            </div>

        </div>


    </div>
@endsection
