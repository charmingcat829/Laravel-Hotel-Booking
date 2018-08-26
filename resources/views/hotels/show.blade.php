@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $hotel->name }}</div>
                    <div class="card-body">
                        <div class="body">{{$hotel->address}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
