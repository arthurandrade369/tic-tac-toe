@extends('layouts.template')

@push('scripts')
<script src="{{ asset('js/script.js') }}"></script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endpush

@section('content')
    <div class="container-md bg-purple">
        <div class="row justify-content-center">
            <div class="col-2 px-0 py-3 text-center"><img class="empty-rect-svg" src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
            <div class="col-2 px-0 py-3 text-center"><img class="empty-rect-svg" src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
            <div class="col-2 px-0 py-3 text-center"><img class="empty-rect-svg" src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2 px-0 py-3 text-center"><img class="empty-rect-svg" src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
            <div class="col-2 px-0 py-3 text-center"><img class="empty-rect-svg" src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
            <div class="col-2 px-0 py-3 text-center"><img class="empty-rect-svg" src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2 px-0 py-3 text-center"><img class="empty-rect-svg" src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
            <div class="col-2 px-0 py-3 text-center"><img class="empty-rect-svg" src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
            <div class="col-2 px-0 py-3 text-center"><img class="empty-rect-svg" src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
        </div>
    </div>
@endsection
