@extends('frontend.layouts.app')
@section('meta_title','Contact Us | '.env('APP_NAME'))
@section('meta_description','Contact Us | '.env('APP_NAME'))
@section('content')


<section class="hm_glry">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hm_glry_box">
                    <div class="head">
                        <h2>Photo Gallery</h2>
                        <hr>
                    </div>
                </div>

                <!-- Owl Carousel -->
                <div class="glry_slide owl-carousel owl-theme">
                    @foreach(\App\Models\Gallery::all()->unique('images') as $service)
                        <div class="item">
                            <div class="tm_box">
                                <a href="{{ asset('storage/' . str_replace('public/storage/', '', $service->images)) }}"
                                   data-lightbox="gallery"
                                   data-title="{{ $service->title }}">
                                    <img class="example-image" src="{{ asset('storage/' . str_replace('public/storage/', '', $service->images)) }}" alt="{{ $service->title }}">
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('style')

@endsection
@section('script')

@endsection
