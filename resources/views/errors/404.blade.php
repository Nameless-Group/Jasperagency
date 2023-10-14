@extends('base')
@section('title','Home')

@push('styles')
@endpush

@section('content')
    <section class="error-section pt-220 rpt-120 pb-100 rpb-80 rel z-1"
             style="background-image: url({{ asset('assets/images/hero/hero-two-bg.png') }})">
        <div class="container container-1290">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="error-content rmb-55 wow fadeInRight delay-0-2s">
                        <h1>OPPS!</h1>
                        <div class="section-title mb-50 rmb-35"><h2>This Page Can't Be Found</h2></div>
                        <a href="/" class="theme-btn style-two">Go to Home <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="error-image wow zoomIn delay-0-2s">
                        <img src="{{ asset('assets/images/background/404-error.png') }}" alt="404 Error">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')

@endpush
