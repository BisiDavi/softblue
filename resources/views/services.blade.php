@extends('layouts.pages')

@section('title')
  Services
@endsection

@section('cssLink')
<link href="{{ asset('css/services.mediaquery.css') }}" rel="stylesheet" />
@endsection

@section('page-banner')
  <div class="hero-container px-3 service-page">
    <div class="hero-jumbotron row">
      <div class="hero-text col-lg-6 col-md-6 col-sm-12 mt-5">
        <h1>DATA-DRIVEN,</h1>
        <span class="d-flex">
          <h1>TO THE SMALLEST DETAIL</h1>
          <div id="typewriter" class="typed-text"></div>
        </span>
        <span class="divider divider-pink"></span>
        <p>
          SoftBlue Nigeria has a vast experience in the delivery of
          world-class solutions in single and multi-operating system
          environments. We go the extra mile to help our clients
          attain their business goals and objectives.
        </p>
      </div>
      <div class="hero-animation">
        <span class="animationsvg">
          <img src="{{ asset('images/services.jpg') }}" alt="softblueng" />
        </span>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <main class="row bg-white servicepage-main">
    <section class="engineeringteam container-fluid px-5">
      <div class="row py-1">
        <div class="col-lg-6 d-flex flex-column">
          <h1 class="jumbo-text my-2">
            FINANCIAL AND TRADING SYSTEMS
          </h1>
          <div class="divider divider-pink my-2"></div>
          <p class="my-2">
            Software solutions for financial institutions: loan applications, payment processing software, trading
            platforms etc
          </p>
        </div>
        <div class="col-lg-6 d-flex flex-column hidden">
          <div class="animation">
            <img src={{ asset('images/financialsystems.svg') }} />
          </div>
        </div>
      </div>
    </section>
    <section class="applicationdevelopment container-fluid px-5">
      <div class="row py-1">
        <div class="col-lg-6 d-flex flex-column hidden">
          <div class="animation">
            <img src={{ asset('images/application.svg') }} />
          </div>
        </div>
        <div class="col-lg-6 d-flex flex-column">
          <h1 class="jumbo-text my-2">
            WEB/MOBILE APPLICATION DEVELOPMENT</h1>
          <div class="divider divider-pink my-2"></div>
          <p class="my-2">
            Development of Web/Mobile Applications to meet clients’ unique needs:
            Web-Apps, Android and iOS mobile applications
          </p>
        </div>
      </div>
    </section>
    <section class="analytics container-fluid px-5">
      <div class="row py-1">
        <div class="col-lg-6 d-flex flex-column">
          <h1 class="jumbo-text my-2">
            TELECOMMUNICATION SYSTEMS</h1>
          <div class="divider divider-pink my-2"></div>
          <p class="my-2">
            Development of custom software solutions for telecommunication services
          </p>
        </div>
        <div class="col-lg-6 d-flex flex-column hidden">
          <div class="animation">
            <img src={{ asset('images/telecommunication.svg') }} />
          </div>
        </div>
      </div>
    </section>
    <section class="machinelearning container-fluid px-5">
      <div class="row py-1">
        <div class="col-lg-6 d-flex flex-column hidden">
          <div class="animation">
            <img src={{ asset('images/machinelearning.svg') }} />
          </div>
        </div>
        <div class="col-lg-6 d-flex flex-column">
          <h1 class="jumbo-text my-2">
            CLIENT SERVER APPLICATIONS</h1>
          <div class="divider divider-pink my-2"></div>
          <p class="my-2">
            Development and deployment of client/server applications
          </p>
        </div>
      </div>
    </section>
    <section class="enterpriseapplication container-fluid px-5">
      <div class="row py-1">
        <div class="col-lg-6 d-flex flex-column">
          <h1 class="jumbo-text my-2">
            E-COMMERCE (B2B/B2C) SYSTEMS</h1>
          <div class="divider divider-pink my-2"></div>
          <p class="my-2">
            Development of e-commerce software for B2B and B2C purposes
          </p>
        </div>
        <div class="col-lg-6 d-flex flex-column hidden">
          <div class="animation">
            <img src={{ asset('images/ecommerce.svg') }} />
          </div>
        </div>
      </div>
    </section>
    <section class="enterpriseapplication container-fluid px-5">
      <div class="row py-1">
        <div class="col-lg-6 d-flex flex-column hidden">
          <div class="animation">
            <img src={{ asset('images/enterprise.svg') }} />
          </div>
        </div>
        <div class="col-lg-6 d-flex flex-column">
          <h1 class="jumbo-text my-2">
            ENTERPRISE APPLICATION INTEGRATIONS</h1>
          <div class="divider divider-pink my-2"></div>
          <p class="my-2">
            Integration of enterprise applications in an organisation to simplify and automate business processes
          </p>
        </div>
      </div>
    </section>
    @include('partials.hireus')
  </main>
@endsection
