@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hotel Listings</div>
                    <div class="card-body">
                        @foreach($hotels as $hotel)
                            <article>
                                <h4>{{ $hotel->name }}</h4>
                                <div class="body">{{$hotel->address}}</div>
                            </article>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
