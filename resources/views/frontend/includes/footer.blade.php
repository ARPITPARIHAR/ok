<footer style="background: url('{{ asset('images/ftr_bg.jpg') }}') no-repeat center center; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-xl-4 col-lg-12 col-md-12">
				<div class="ftr_abt">

 <a href="{{ url('/') }}">
    <img src="{{ (businessSetting(1)->footer_logo) }}" alt="logo">
</a>
					<p>{{businessSetting(1)->brief_description}}</p>
				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-12">
				<div class="links">
					<h3>Quick Links</h3>
                    <ul>
                        @foreach(\App\Models\Page::where('parent_id', '!=', 0)->orderBy('position', 'asc')->get() as $page)
                            <li>
                                <a href="{{ route('page.show', ['slug' => $page->slug]) }}">
                                    <img src="{{ asset('images/arow.png') }}" alt="arow"> {{ $page->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

				</div>
			</div>
			<div class="col-xl-4 col-lg-6 col-md-12">
				<div class="cntct">
					<h3>Get in Touch</h3>
					<div class="adrs">
						<div class="adrs_box">
							<div class="adrs_inr">
								<div class="adrs_icn"><img src="{{ asset('images/adrs01.png')}}" alt="adrs"></div>
							</div>
							<p>



								<a href="tel:+91-1427-294181">{{ businessSetting(1)->contact_numbers ?? 'Not Available' }}</a>
							</p>
						</div>
						<div class="adrs_box">
							<div class="adrs_inr">
								<div class="adrs_icn"><img src="{{ asset('images/adrs02.png')}}" alt="adrs"></div>
							</div>
							<p>
								<a href="mailto:dccb.dausa@rajasthan.gov.in">{{businessSetting(1)->email}}</a>
							</p>
						</div>
						<div class="adrs_box">
							<div class="adrs_inr">
								<div class="adrs_icn"><img src="{{ asset('images/adrs03.png')}}" alt="adrs"></div>
							</div>
							<p>{{businessSetting(1)->address}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="copyright">
	<p>Copyright © 2024 The Dausa Central Co-Oprative Bank - All rights reserved. </p>
</div>
