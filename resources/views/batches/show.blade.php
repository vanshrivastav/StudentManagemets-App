@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Batches</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-title">Name : {{ $batche->name }}</h5>
            <p class="card-text">Course Name : {{ $batche->course->name }}</p>
            <p class="card-text">Start Date : {{ $batche->start_date }}</p>
        </div>

        </hr>

    </div>
</div>
@endsection