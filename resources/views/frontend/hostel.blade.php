@extends('frontend.layouts.app')
@section('meta_title','Hostel Facility | '.env('APP_NAME'))
@section('meta_description','Hostel Facility | '.env('APP_NAME'))

@section('content')

<section class="about">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="head">
					<h2>Hostel Facility</h2>
                    @foreach (\App\Models\Hostelservice::all() as $hostelService)
                    <p>{{ $hostelService->brief_description }}</p>
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
