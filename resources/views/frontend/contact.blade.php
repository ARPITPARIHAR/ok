@extends('frontend.layouts.app')
@section('meta_title','Contact Us | '.env('APP_NAME'))
@section('meta_description','Contact Us | '.env('APP_NAME'))
@section('content')
<section class="contact">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-12 col-md-12">
				<div class="head">
						<h2>Locations</h2>
					<hr>
				</div>
				<div class="row align-items-center">
					<div class="col-md-6">
						<div class="cntct_box">
							<div class="cntct_inr">
								<span><img src="images/cntct001.png" alt="phone"></span>
							</div>
							<div class="cntct_txt">
								<h4>Phone Number</h4>
								<p>+91-1427-294181</p>
							</div>
						</div>
						<div class="cntct_box">
							<div class="cntct_inr">
								<span><img src="images/cntct002.png" alt="mail"></span>
							</div>
							<div class="cntct_txt">
								<h4>Email ID</h4>
								<p>dccb.dausa@rajasthan.gov.in</p>
							</div>
						</div>
						<div class="cntct_box">
							<div class="cntct_inr">
								<span><img src="images/cntct003.png" alt="adrs"></span>
							</div>
							<div class="cntct_txt">
								<h4>Adress</h4>
								<p>Sahkar Bhawan, Khan Bhakari Road, Dausa - 303303(RAJ.)</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="cntct_map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.5321549645864!2d76.36229467450516!3d26.918339159850483!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396d8b7d4c77a4ad%3A0x313e5ddbcf50b76e!2s%22The%20Dausa%20Central%20Co%20Operative%20Bank!5e0!3m2!1sen!2sin!4v1734427574670!5m2!1sen!2sin" width="100%" height="340" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
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
