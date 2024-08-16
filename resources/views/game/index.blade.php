@extends('layouts.template')

@push('scripts')
    @vite('resources/js/app.js')
@endpush

@push('styles')
    @vite('resources/css/app.css')"
@endpush

@section('content')
    <div class="container-md bg-purple">
        <div class="row justify-content-center">
            <div class="col-2 px-0 py-3 text-center"><img id="11" class="rect-svg"
                    src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
            <div class="col-2 px-0 py-3 text-center"><img id="12" class="rect-svg"
                    src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
            <div class="col-2 px-0 py-3 text-center"><img id="13" class="rect-svg"
                    src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2 px-0 py-3 text-center"><img id="21" class="rect-svg"
                    src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
            <div class="col-2 px-0 py-3 text-center"><img id="22" class="rect-svg"
                    src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
            <div class="col-2 px-0 py-3 text-center"><img id="23" class="rect-svg"
                    src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
        </div>
        <div class="row justify-content-center">
            <div class="col-2 px-0 py-3 text-center"><img id="31" class="rect-svg"
                    src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
            <div class="col-2 px-0 py-3 text-center"><img id="32" class="rect-svg"
                    src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
            <div class="col-2 px-0 py-3 text-center"><img id="33" class="rect-svg"
                    src="{{ asset('imgs/rectangle-empty.svg') }}" alt="Empty rectangle"></div>
        </div>
    </div>
@endsection
