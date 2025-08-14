@extends('layouts.admin')

@section('content')
    <h2 class="mb-4">Dashboard</h2>

    <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card text-bg-primary shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Users</h5>
                    <p class="card-text fs-4">120</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card text-bg-success shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Posts</h5>
                    <p class="card-text fs-4">87</p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-3">
            <div class="card text-bg-warning shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Comments</h5>
                    <p class="card-text fs-4">342</p>
                </div>
            </div>
        </div>
    </div>
@endsection
