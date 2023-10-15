@extends('base')
@section('title','JasperStack')

@push('styles')
@endpush

@section('content')
    <!-- Hidden Sidebar -->
{{--    @include('includes.slick')--}}
    <!--End Hidden Sidebar -->

    <!-- Hero Section Start -->
    @include('includes.top-bar')
    <!-- Hero Section End -->

    <!-- Service Style Four start -->
    @include('includes.services')
    <!-- Service Style Four end -->

    <!-- Headline area start -->
    @include('includes.headline', ['area' => 'top'])
    <!-- Headline Area end -->

    <!-- Project Timeline-two Area start -->
    {{--    @include('includes.project')--}}
    <!-- Project Timeline Two Area end -->

    <!-- Team Area start -->
    @include('includes.team')
    <!-- Team Area end -->

    <!-- Why Choose Us start -->
    @include('includes.choose-us')
    <!-- Why Choose Us end -->

    <!-- About Us Area start -->
    @include('includes.about-us')
    <!-- About Us Area end -->


    <!-- Pricing style three start -->
    @include('includes.packages')
    <!-- Pricing style three end -->

    <!-- Headline area start -->
{{--    @include('includes.headline', ['area' => 'bottom'])--}}
    <!-- Headline Area end -->

    <!-- Testimonial Area start -->
    {{--    @include('includes.reference')--}}
    <!-- Testimonial Area end -->

    <!-- Blog Style Two start -->
    @include('includes.contact-us')
    <!-- Blog Style Two end -->

@endsection

@push('scripts')

@endpush
