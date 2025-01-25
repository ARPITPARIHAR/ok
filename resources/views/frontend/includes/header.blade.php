<section class="main_banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 no_padding">
				<div class="mn_bnr">
					<img src="images/mn_bnr.jpg" alt="bnr">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="branchs">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="brnchs_txt">
					<div class="head">
						<h2>Our Branches</h2>
						<hr>
					</div>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
				</div>
			</div>
			<div class="col-lg-8 col-md-6">
				<div class="brnch_slide owl-carousel owl-theme">
					<div class="item">
						<div class="brnch_box">
							<img src="images/brnch001.jpg" alt="brnch">
							<div class="brnch-txt">
								<h4>Manganj, Dausa</h4>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="brnch_box">
							<img src="images/brnch002.jpg" alt="brnch">
							<div class="brnch-txt">
								<h4>Bandikui</h4>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="brnch_box">
							<img src="images/brnch001.jpg" alt="brnch">
							<div class="brnch-txt">
								<h4>Manganj, Dausa</h4>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="brnch_box">
							<img src="images/brnch002.jpg" alt="brnch">
							<div class="brnch-txt">
								<h4>Bandikui</h4>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="hm_abt">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 no_padding">
				<div class="hm_abt_imag">
					<img src="images/hm_abt.jpg" alt="abt">
				</div>
			</div>
			<div class="col-md-6">
				<div class="hm_abt_txt">
					<p>पंजीयन बैंक का पंजीयन सहकारी संस्था अधिनियम 2001 के अधिनियम संख्या 16 की धारा 6 उपधारा 1 अनुच्छेद (क, ख, ग , घ , के अन्तर्गत दिनांक 19 फरवरी, 2004 को हुआ है, जिसका पंजीयन क्रमांक 248/एलडी है। </p>
					<p>लाईसेन्स संख्यारू भारतीय रिजर्व बैंक द्वारा बैंक को प्रदान किये गये लाईसेन्स की संख्या ग्राआऋवि जय सह 25 दिनांक 03 नवम्बर, 2011 है।</p>
					<p>कार्य क्षेत्र बैंक का कार्य क्षेत्र सम्पूर्ण दौसा जिला तक सीमित है। </p>
					<p>शाखाएं बैंक में कुल 9 शाखाएं क्रमशः दौसा, लालसोट, बाँदीकुई, सिकराय, महवा, मण्डावर, रामगढ़ पचवारा, राहुवास ,एवं सिकन्दरा कार्यरत हैं। साथ ही बैंक छेत्रानगत  कुल 203 ग्राम सेवा सहकारी समितियाँ भी कार्यषील हैं। बैंक का प्रधान कार्यालय, सहकार भवन, खान भांखरी रोड़, दौसा पर स्थित है। सहकार भवन में दौसा केन्द्रीय सहकारी बैंक लि, प्राथमिक सहकारी भूमि विकास बैंक लि, दौसा, कार्यालय उप रजिस्ट्रार, सहकारी समितियाँ दौसा व कार्यालय विषेष लेखा परीक्षक, दौसा के कार्यालय स्थित हैं।</p>
					<p>उद्देश्य: बैंक का उद्देश्य जिले के कृषकों, सदस्यों को शीर्ष सहकारी बैंक, नाबार्ड की स्वीकृत योजनाओं के अन्तर्गत अल्पकालीन कृषि ऋण , मध्यकालीन कृषि ऋण, अकृषि ऋण ,एवं अन्य विविधिकृत ऋण उपलब्ध करवाना है।</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="hm_srvcs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="hm_srvc_txt">
                    <div class="head">
                        <h2>Our Services</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @php
                    $services = \App\Models\Ourservice::all();
                @endphp
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-4">
                        <div class="srvc_box">
                            <div class="srvc_icn">
                                <div class="srvc_icn_inr">
                                    <!-- Assuming you store the image path in 'thumbnail_img' column -->
                                    <img src="{{ asset('storage/' . $service->thumbnail_img) }}" alt="srvc_icn">
                                </div>
                            </div>
                            <div class="srvc_txt">
                                <h4>{{ $service->title }}</h4>
                                <p>{{ strip_tags($service->brief_description) }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>


<section class="hm_plcs">
    <div class="container">
        <div class="row">
            <!-- Left container for Policies & Guidelines -->
            <div class="col-md-8 no_padding">
                <div class="plcs_box">
                    <div class="head">
                        <h2>Policies & Guidelines</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="inr_plcs">
                                <h4>KYC & AML</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="inr_plcs">
                                <h4>DICGC</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="inr_plcs">
                                <h4>DEATH CLAIM</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="inr_plcs">
                                <h4>NOMINATION</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="inr_plcs">
                                <h4>SJSY</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="inr_plcs">
                                <h4>RSVDB</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right container for Downloads with scroll bar -->
            <div class="col-md-4 no_padding">
                <div class="hm_dwnlds">
                    <div class="head">
                        <h2>Downloads</h2>
                    </div>
                    <ul>
                        @foreach (\App\Models\Subcategory::with('banners')->get() as $subcategory)
                            <li>

                                    <span class="subcategory-name">{{ $subcategory->name }}</span>


                                    @if ($subcategory->banners->count() > 0)
                                        @foreach ($subcategory->banners as $banner)
                                            <!-- Display PDF link -->
                                            @if ($banner->thumbnail_img)
                                            {{-- <a href="{{  asset($upcoming->pdf_file) }}" download >
                                                <img src="{{ asset('images/pdf.png') }}" alt="pdf"> --}}
                                                <a href="{{ asset($banner->thumbnail_img) }}" target="_blank" class="pdf-link">
                                                    <img src="{{ asset('images/pdf.png') }}" alt="pdf" class="pdf-icon">
                                                </a>
                                            @else
                                                <span class="text-muted">(No PDF)</span>
                                            @endif
                                        @endforeach
                                    @else
                                        <span class="text-muted">(No PDF)</span>
                                    @endif
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>

</section>

<style>
/* Ensure both containers are aligned and occupy the full space */
/* Ensure both containers are aligned and occupy the full space */
/* Ensure both containers are aligned and occupy the full space */
.no_padding {
    padding: 0;
    margin: 0;
}

/* Ensure the right Downloads container has a fixed height and scrolls when necessary */
.hm_dwnlds {
    padding: 10px;
}

/* Make the header fixed and prevent it from scrolling */
.hm_dwnlds .head {
    position: sticky;
    top: 0;
    padding: 10px;
    z-index: 10;
}

/* Set a fixed height for the list container and make it scrollable */
.hm_dwnlds ul {
    max-height: 300px;
    overflow-y: auto;
    padding-left: 0;
    list-style-type: none;
}

/* Add spacing to list items */
.hm_dwnlds ul li {
    margin-bottom: 10px;
}

/* Make sure links are styled properly */
.hm_dwnlds ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
    display: flex;
    align-items: center;
}

/* Align the subcategory name and PDF icon horizontally */
.subcategory-item {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.subcategory-name {
    margin-right: 10px;
    flex-grow: 1; /* Ensure the name takes available space */
}

/* Custom styles for PDF link */
.pdf-link {
    margin-left: 5px;
}

.pdf-icon {
    width: 40px;
    height: 40px;
}

/* Ensure that if there's no PDF, the "No PDF" message is aligned properly */
.text-muted {
    font-size: 14px;
    margin-left: 10px;
}

/* Adjust max-height for mobile devices */
@media (max-width: 767px) {
    .hm_dwnlds ul {
        max-height: 250px;
    }
}



</style>


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

				<div class="glry_slide owl-carousel owl-theme">
					<div class="item">
						<div class="tm_box">
							<a class="example-image-link" href="images/full_glry001.jpg" data-lightbox="example-set"><img class="example-image" src="images/hm_glry001.jpg" alt="glry"></a>
						</div>
					</div>
					<div class="item">
						<div class="tm_box">
							<a class="example-image-link" href="images/full_glry001.jpg" data-lightbox="example-set"><img class="example-image" src="images/hm_glry002.jpg" alt="glry"></a>
						</div>
					</div>
					<div class="item">
						<div class="tm_box">
							<a class="example-image-link" href="images/full_glry001.jpg" data-lightbox="example-set"><img class="example-image" src="images/hm_glry003.jpg" alt="glry"></a>
						</div>
					</div>
					<div class="item">
						<div class="tm_box">
							<a class="example-image-link" href="images/full_glry001.jpg" data-lightbox="example-set"><img class="example-image" src="images/hm_glry004.jpg" alt="glry"></a>
						</div>
					</div>
					<div class="item">
						<div class="tm_box">
							<a class="example-image-link" href="images/full_glry005.jpg" data-lightbox="example-set"><img class="example-image" src="images/hm_glry005.jpg" alt="glry"></a>
						</div>
					</div>
					<div class="item">
						<div class="tm_box">
							<a class="example-image-link" href="images/full_glry006.jpg" data-lightbox="example-set"><img class="example-image" src="images/hm_glry006.jpg" alt="glry"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="hm_map">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 no_padding">
				<div class="mp">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4749.614774499119!2d76.33219753023262!3d26.89744105238296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396d8cc38128ec89%3A0x2b5036dbb24289eb!2sDausa%20Kendriya%20Sahakari%20Bank%20Ltd.Dausa!5e0!3m2!1sen!2sin!4v1734236757484!5m2!1sen!2sin" width="100%" height="470" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
