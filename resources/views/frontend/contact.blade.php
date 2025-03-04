@extends('frontend.layouts.app')
@section('meta_title','Contact Us | '.env('APP_NAME'))
@section('meta_description','Contact Us | '.env('APP_NAME'))
@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div><!-- End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>9024548779,9529954586,</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>carrycodetechnolgy@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="{{ route('contact.store') }}" method="post" data-aos="fade-up" data-aos-delay="200">

                @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>
                <div class="btn-container">
                    <button type="submit" class="custom-btn">
                        Send Message <i class="fas fa-paper-plane"></i>
                    </button>
                </div>


            </form>
          </div>

        </div>

      </div>

    </section><

  </main>
@endsection
@section('style')
@endsection
@section('script')
@endsection

<style>
/* 🌟 Centering the Button */
.btn-container {
    display: flex;
    justify-content: center;
    margin-top: 10px; /* Adjust spacing */
}

/* 🎨 Stylish Button */
.custom-btn {
    background: maroon;
    border: none;
    font-weight: bold;
    font-size: 14px;
    color: white;
    padding: 8px 16px;
    border-radius: 30px;
    cursor: pointer;
    letter-spacing: 1px;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    transition: all 0.3s ease-in-out;
    box-shadow: 0px 3px 8px rgba(255, 117, 140, 0.4);
    min-width: 140px; /* Smaller width */
    justify-content: center; /* Center text */
}

/* 🔥 Hover Effect */
.custom-btn:hover {
    transform: scale(1.05);
    background: black;
    box-shadow: 0px 5px 12px rgba(255, 117, 140, 0.6);
}

/* ✨ Pressed Effect */
.custom-btn:active {
    transform: scale(0.95);
    box-shadow: 0px 2px 6px rgba(255, 117, 140, 0.5);
}

/* 📱 Responsive Size */
@media (max-width: 768px) {
    .custom-btn {
        padding: 7px 14px;
        font-size: 13px;
        min-width: 120px; /* Even smaller on mobile */
    }
}

</style>
