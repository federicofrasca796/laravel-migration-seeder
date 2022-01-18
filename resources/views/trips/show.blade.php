@extends('layouts.app')
@section('page-name', 'Trips')
@section('custom-css', asset('css/trips.css'))


@section('main-content')
    <main id="trips_main">
        <h1 class="text-center my-5"> Avaiable trips </h1>

        <div class="container">
            <div class="row">
                <div class="col-12 my-2">
                    <div class="card text-start">
                        <div class="card-body">
                            <h4 class="card-title">{{ $package->trip_name }}</h4>
                            <p class="card-text">
                                {{ $package->trip_description }}
                            <div class="text-end">{{ $package->trip_date }}</div>
                            </p>
                            <a href="#" class="btn btn-primary">{{ $package->trip_price }}€</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection