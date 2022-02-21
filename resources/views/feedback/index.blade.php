@extends('layouts.main')
@section('title')
    Feedback
@endsection

@section('content')
<div class="container">
    <div class="row">
        @include('feedback.components.create')
    </div>
    @include('inc.form-errors')
</div>

<div class="container mt-5">
    @include('feedback.components.table')
</div>
@endsection
