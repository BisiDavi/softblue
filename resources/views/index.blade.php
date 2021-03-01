@extends('layouts.pages')

@section('title')
  Software Design & Development powered with AI
@endsection

@section('page-banner')
  <div class="container-fluid">
    <div class="homepage hero-jumbotron row">
      <div class="hero-text col-lg-12 col-md-6 col-sm-12 mt-5 position-relative">
        <h1>BUILD THE RIGHT</h1>
        <span class="d-flex">
          <h1>SOFTWARE SOLUTION FOR YOUR</h1>
          <div id="typewriter" class="typed-text"></div>
        </span>
        <span class="divider divider-pink"></span>
        <p>
          Turn your ideas and projects into Reality, Get Started with
          our team of Professionals.
        </p>
      </div>
      <div class="hero-animation">
        <span class="animationsvg">
          <img src="{{ asset('/images/launch.png') }}" alt="launch with us" />
        </span>
      </div>
    </div>
  </div>
  <div class="sponsorsbrand row flex-column mx-auto">
    <div class="brand-content d-flex justify-content-between w-100">
      <p>You are in good company</p>
      <span class="brand-logos">
        <img src="{{ asset('/images/interswitch.png') }}" alt="brand partners" />
        <img src="{{ asset('/images/venturegarden.png') }}" alt="brand partners" />
        <img src="{{ asset('/images/upwork.png') }}" alt="brand partners" />
      </span>
    </div>
  </div>
@endsection

@section('content')
  <main class="row pb-4">
    <section class="our-services container-fluid p-5">
      <div class="row py-5">
        <div class="col-lg-4">
          <h1>OUR SERVICES</h1>
          <span class="divider divider-blue"></span>
          <p>
            <b>
              Build the right software solution for your business-critical
              need.
            </b>
            <br />
            <br />
            SoftBlue Nigeria is a Lagos based software company, managed by a
            highly experienced team of business and software professionals,
            offering consulting services in the areas of Software Development,
            IT Infrastructure Management, Security Infrastructure Design, and
            Quality Assurance and Implementation
            <a href="{{ url('/services') }}">read more </a>
          </p>
        </div>
        <div class="col-lg-4 d-flex flex-column">
          <div class="col services">
            <img src="{{ asset('/images/income.svg') }}" alt="profile icon" />
            <h4>Financial and Trading Systems</h4>
            <p>
              Software solutions for financial institutions: loan
              applications, payment processing software, trading platforms
              etc.
            </p>
          </div>
          <div class="col services">
            <img src="{{ asset('/images/code.svg') }}" alt="machine learning icon" />
            <h4>Web/Mobile Application Development</h4>
            <p>
              Development of Web/Mobile Applications to meet clients’ unique
              needs: Web-Apps, Android and iOS mobile applications
            </p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="col services">
            <img src="{{ asset('/images/opacity.svg') }}" alt="application development icon" />
            <h4>Enterprise Application Integrations</h4>
            <p>
              Integration of enterprise applications in an organisation to
              simplify and automate business processes
            </p>
          </div>
          <div class="col services">
            <img src="{{ asset('/images/shopping-cart.svg') }}" alt="analytics icon" />
            <h4>E-Commerce (B2B/B2C) Systems</h4>
            <p>Development of e-commerce software for B2B and B2C purposes</p>
          </div>
        </div>
      </div>
    </section>

    <section class="build-with-us container-fluid">
      <div class="row py-5">
        <div class="build-content col-lg-12">
          <div class="section-backgroundimg" style="transform: translate(0px, 42.29px)"></div>
          <div class="text-content mx-auto d-flex flex-column w-50" style="transform: translate(0px, 71.145px)">
            <h1>BUILD SOMETHING WITH US</h1>
            <p>
              Let’s partner to build amazing products that will excite end
              users and drive enterprise ambitions.
            </p>
            <a href="/contact.html" class="text-decoration-none mx-auto">
              <button class="btn btn-blue">GET IN TOUCH</button>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection


@section('typewriter-script')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/TypewriterJS/2.17.0/core.min.js"
    integrity="sha512-o6alMAMTI5qAmVC1UvuRPgTl3UOOkP8NZ6212+rq1Oslsuy8Owt9r5Z0Wu0LNxpw/Q8N8ToGiyovHV+kyOulxg=="
    crossorigin="anonymous"></script>
  <script>
    new Typewriter('#typewriter', {
      strings: [
        '<h1>BUSINESS</h1>',
        '<h1>E-COMMERCE</h1>',
        '<h1>START UP</h1>',
        '<h1>BRAND</h1>'
      ],
      autoStart: true,
      loop: true
    });

  </script>
@endsection
