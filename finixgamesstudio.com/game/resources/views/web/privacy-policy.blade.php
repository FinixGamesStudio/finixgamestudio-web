@extends('web.layout.main')
@section('page-title')
  {{ __('Privacy Policy') }}
@endsection
@section('content')
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Privacy Policy</h1>
              <b>Privacy Policy and Terms of Use: Your Trust Matters at Finix Game Studio</b>
              <p class="mb-0">At Finix Game Studio, we prioritize your privacy and transparency in how we handle your information.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="{{ route('home')}}">Home</a></li>
            <li class="current">Privacy Policy</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section section-pading">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
       
        <div class="">
          <h1>Privacy Policy and Terms of Use for Finix Game Studio</h1>
          <h2>1. Introduction</h2>
          <p class="text-secondary">
              Welcome to finixgamestudio! This Privacy Policy and Terms of Use govern your
              use of our website, finixgamestudio, and any related services offered by thopgames.
          </p>
          <p class="text-secondary">
              By using our website, you agree to the terms outlined in this policy. Please read this document carefully to
              understand how we collect, use, and protect your information.
          </p>
          <h3 class="mb-3">2. Data Collection</h3>
          <p class="text-secondary">We don't collect any user inforamtion or data from users</p>
          <h3 class="mb-3">3. Use of Data</h3>
          <p class="text-secondary">We collect and use your data for the following purposes:</p>
          <p class="text-secondary ms-5">• To provide and maintain our website.</p>
          <p class="text-secondary ms-5">• To manage your account and affiliate partner program participation.</p>
          <p class="text-secondary ms-5">• To communicate with you regarding your account, inquiries, and updates.</p>
          <p class="text-secondary ms-5">• To enhance our website's functionality and user experience.</p>
          <p class="text-secondary ms-5">• To comply with legal obligations.</p>
          <h2>4. Third-Party Services</h2>
          <p class="text-secondary">
              While we do not allow third parties to access or process data directly, we
              may use third-party payment processors to facilitate transactions and payments on our website.
              Please review their respective privacy policies for more information.
          </p>
          <h2>5. Location of Data Processing</h2>
          <p class="text-secondary">Your data will be processed in the United States, where our servers are located.</p>
          <h2>6. Children's Privacy</h2>
          <p class="text-secondary">
              Our website is accessible to children; however, it is not designed or
              intended for children under the age of 13. We do not knowingly collect personal information from
              children under 13. If you believe that a child has provided us with their personal information,
              please contact us, and we will promptly delete such information.
          </p>
          <h2>7. Security Measures</h2>
          <p class="text-secondary">
              We implement reasonable security measures to protect your personal
              information from unauthorized access, disclosure, alteration, or destruction. However, no data
              transmission over the internet or storage system can be guaranteed as 100% secure. Please take
              appropriate precautions when sharing your information online.
          </p>
          <p>
              <strong>
                  We do not collect or store any information related to gambling activities. This platform
                  does not include any gambling content.
              </strong>
          </p>
          <p><strong>In our games all the conis is vertual but there is not real value of it.</strong></p>
          <p><strong>All the games for a fun and entatement perpose we do not ask to do any peyment collection from user side.</strong></p>
      </div>
      </div>
    </section>
@endsection
