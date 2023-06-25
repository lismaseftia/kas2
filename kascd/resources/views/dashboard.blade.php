@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Count: {{ $userCount }}</h5>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Order Count: {{ $orderCount }}</h5>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Product Count: {{ $productCount }}</h5>
            </div>
        </div>
    </div>
@endsection
