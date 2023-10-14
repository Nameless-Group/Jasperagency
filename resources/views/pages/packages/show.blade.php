@extends('base')
@section('title', $package->name)

@push('styles')
@endpush

@section('content')
    <!-- Page Banner Start -->
    <section class="page-banner-area overlay pt-220 rpt-150 pb-170 rpb-100 rel z-1 bgs-cover text-center"
             style="background-image: url({{ asset('assets/images/banner/banner-bg.jpg') }});">
        <div class="container">
            <div class="banner-inner rpt-10">
                <h2 class="page-title wow fadeInUp delay-0-2s">package Details</h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInUp delay-0-4s">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">{{ $package->name }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->
    <section class="product-details pt-130 rpt-100">
        <div class="container container-1290">
            <div class="tab-content pb-30 wow fadeInUp delay-0-2s animated"
                 style="visibility: visible; animation-name: fadeInUp;">
                <div class="tab-pane fade active show" id="details">
                    <div class="section-title">
                        <span class="sub-title mb-15">Introduction</span>
                    </div>
                    <!-- checking slug might be better for now chose id -->
                    @if($package->id === 1)
                        @include('pages.packages.types.basic')
                    @elseif($package->id ===2 )
                        @include('pages.packages.types.regular')
                    @elseif($package->id === 3)
                        @include('pages.packages.types.golden')
                    @else

                    @endif
                </div>
            </div>
        </div>
    </section>
    @include('includes.packages')
@endsection

@push('scripts')

@endpush
