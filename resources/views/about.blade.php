@extends('layouts.about-layout')

@section('title')
  About us
@endsection

@section('cssLink')
  <link rel="stylesheet" href="{{ asset('css/about.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/about.mediaquery.css') }}" />
@endsection

@section('page-banner')
  <div class="container about-page">
    <div class="hero-jumbotron row">
      <div class="hero-text col-lg-8 col-md-8 col-sm-12 mx-auto d-flex flex-column">
        <h1 class="text-center text-white">BEAUTIFULLY ENGINEERED PRODUCTS</h1>
        <h1 class="text-center text-white">BUILT TO PERFORM</h1>
        <span class="divider divider-pink mx-auto"></span>
        <p class="text-center mx-auto text-white">
          Our partnership model ensures that we help amplify your
          visions and deliver on our promise of success.
        </p>
      </div>
    </div>
  </div>
  <div id="menuTab" class="sponsorsbrand about row flex-column mx-auto">
    <div class="menu-border"></div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="company-tab" data-toggle="tab" href="#company" role="tab" aria-controls="company"
          aria-selected="true">COMPANY</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="team-tab" data-toggle="tab" href="#ourteam" role="tab" aria-controls="ourteam"
          aria-selected="false">OUR TEAM</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="clients-tab" data-toggle="tab" href="#clients" role="tab" aria-controls="clients"
          aria-selected="false">CLIENTS</a>
      </li>
    </ul>
  </div>
@endsection

@section('content')
  <main class="row bg-white about">
    <section class="about-page pt-2">
      <div class="row w-100">
        <div class="tab-content">
          <div class="tab-pane active" id="company" role="tabpanel" aria-labelledby="company-tab">
            <section class="partners-section mb-3 mx-auto d-flex col-lg-12 px-5">
              <div class="partner-text-content d-flex flex-column col-lg-7 col-sm-12">
                <h1 class="my-2 jumbo-text">
                  GLOBALLY DIVERSE <br />
                  PERSPECTIVE
                </h1>
                <span class="divider divider-pink mx-auto"></span>
                <p class="my-2">
                  We have developed products that have impacted people and
                  businesses on different continents while maintaining a local
                  connection. Our expansive experience working with new age
                  technologies, for diverse audiences over the past decade
                  helps us to craft a fit-for-purpose solution regardless of
                  your target market.
                </p>
                <a class="text-decoration-none" href="/about#clients/">
                  <button class="btn btn-blue my-2">OUR CLIENTS</button>
                </a>
              </div>
              <div class="col-lg-5 my-auto d-flex col-sm-12">
                <div class="animation-wrapper d-flex justify-content-end">
                  <img src={{ asset('images/worldmap.jpg') }} />
                </div>
              </div>
            </section>
            <section class="milestone-section container-fluid">
              <div class="container-fluid px-5">
                <div class="row">
                  <div class="col-lg-6 col-sm-12">
                    <div class="milestone-chart-animation">
                      <img src={{ asset('images/tracker.jpg') }} />
                    </div>
                  </div>
                  <div class="col-lg-6 col-sm-12 d-flex flex-column mt-4 pt-4 text-row">
                    
                    <h1 class="my-2 jumbo-text">
                      SOFTWARE DEVELOPMENT, <br />
                      DE-RISKED
                    </h1>
                    <span class="divider divider-pink mx-auto"></span>
                    <p class="my-2">
                      A new paradigm in software development that empowers the
                      client and emboldens the blueprint for success. With our
                      milestone-based engagement plan, you only pay for one
                      milestone at a time, limiting your investment exposure
                      and keeping us honest. Code-reviewed deliverables
                      guarantee that you are not sold lemons but rather a
                      top-shelf output by a trusted partner.
                    </p>
                  </div>
                </div>
              </div>
            </section>
            <section class="vc-section container-fluid px-5 pt-3 pb-0 mb-0">
              <div class="row px-3">
                <div class="col-lg-6 d-flex flex-column">
                  <h1 class="my-2 jumbo-text">VISIBILITY AND CONTROL</h1>
                  <span class="divider divider-pink mx-auto"></span>
                  <p class="my-2">
                    Never feel lost or in the dark about your product. With
                    proprietary tools and processes, take full control of the
                    delivery process and see the progress of your product,
                    on-demand. Monitor project output through our Project
                    Pulse tool and experience better involvement in your
                    product's lifecycle.
                  </p>
                </div>
                <div class="col-lg-6 hidden">
                  <div class="animation-wrapper">
                    <img src={{ asset('images/visiblitycontrol.svg') }} />
                  </div>
                </div>
              </div>
            </section>
            {{-- <section class="staff-images container-fluid h-50 py-5 bg-dark">
              <h1 class="text-center py-5 text-white">Staff images</h1>
            </section> --}}
            <section class="talent-colony container-fluid bg-white mb-0 pt-3 ease-translate">
              <div class="row colony">
                <div class="container talent-container">
                  <div class="col-lg-12 col-xl-12 p-5 talents">
                    <div class="p-5 text-content">
                      <h1 class="text-center my-2 jumbo-text">
                        OUR TALENT COLONY
                      </h1>
                      <span class="divider divider-pink mx-auto"></span>
                      <p class="text-center my-2">
                        A cast of highly motivated Engineers, Data Scientists,
                        Designers, Strategists and Thinkers with a common
                        flair for innovation and excellence. Intelia vets
                        talent using one of the most stringent assessment
                        methodologies in the industry to ensure that our
                        promise of exceeding satisfaction is kept.
                      </p>
                      <a class="mx-auto" href="/about#ourteam/">
                        <button class="btn btn-blue">SEE OUR TEAM</button>
                      </a>
                    </div>
                    <div class="talent-img">
                    <i class="circle circle-pink" style="transform: translateX(0px)"></i>
                    <i class="circle circle-pink circle-xs" style="transform: translateX(0px)"></i>
                    <i class="circle circle-blue circle-xs" style="transform: translateX(0px)"></i>
                    <i class="circle circle-dark circle-sm" style="transform: translateX(0px)"></i>
                    <img src="https://ca.slack-edge.com/TMDN8LQJW-U01GDL750JC-e9d1a6cecc75-512" style="transform: translateX(0px)" />
                    <img src="https://ca.slack-edge.com/TMDN8LQJW-U01CV26JA8L-e9ce0fd960e0-72" style="transform: translateX(0px)" />
                    <img src="https://ca.slack-edge.com/TMDN8LQJW-UMTBG9U14-f87deb0c3ce8-512" style="transform: translateX(0px)" />
                    {{-- <img src="https://via.placeholder.com/85" style="transform: translateX(0px)" /> --}}
                    <img src="https://ca.slack-edge.com/TMDN8LQJW-U01K13Y3293-2235b0d32dbc-512" style="transform: translateX(0px)" />
                    <img src="https://ca.slack-edge.com/TMDN8LQJW-U01D1BCP3FB-97a80c5e2375-512" style="transform: translateX(0px)" />
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="tab-pane" id="ourteam" role="tabpanel" aria-labelledby="team-tab">
            <div class="ourteams team-members container-fluid">
              <div class="container">
                <div class="row py-5">
                  <div class="col-lg-3 member d-flex flex-column">
                    <a class="linkedin" href="#linkedin">
                      <i class="fab fa-linkedin"></i>
                    </a>
                    <img src="https://ca.slack-edge.com/TMDN8LQJW-UMTBG9U14-f87deb0c3ce8-512" alt="team member" class="rounded-circle" />
                    <h3 class="member-name">Samuel</h3>
                    <p class="job-title">CEO</p>
                    <span class="divider divider-pink"></span>
                  </div>
                  <div class="col-lg-3 member d-flex flex-column">
                    <a class="linkedin" href="#linkedin">
                      <i class="fab fa-linkedin"></i>
                    </a>
                    <img src="https://ca.slack-edge.com/TMDN8LQJW-U01D1BCP3FB-97a80c5e2375-512" alt="team member" class="rounded-circle" />
                    <h3 class="member-name">Oluwafunmilade Akande</h3>
                    <p class="job-title">Project Manager</p>
                    <span class="divider divider-pink"></span>
                  </div>
                  <div class="col-lg-3 member d-flex flex-column">
                    <a class="linkedin" href="#linkedin">
                      <i class="fab fa-linkedin"></i>
                    </a>
                    <img src="https://ca.slack-edge.com/TMDN8LQJW-U01K13Y3293-2235b0d32dbc-512" alt="team member" class="rounded-circle" />
                    <h3 class="member-name">Ajiboye Adedotun</h3>
                    <p class="job-title">Software Engineer</p>
                    <span class="divider divider-pink"></span>
                  </div>
                  <div class="col-lg-3 member d-flex flex-column">
                    <a class="linkedin" href="#linkedin">
                      <i class="fab fa-linkedin"></i>
                    </a>
                    <img src="https://ca.slack-edge.com/TMDN8LQJW-U01CV26JA8L-e9ce0fd960e0-72" alt="team member" class="rounded-circle" />
                    <h3 class="member-name">Olubisi David</h3>
                    <p class="job-title">Software Engineer</p>
                    <span class="divider divider-pink"></span>
                  </div>
                </div>
              </div>
              {{-- <div class="staff-gallery row mt-5">
                <div>
                  <img src="https://via.placeholder.com/400" alt="softblue staff image" />
                  <img src="https://via.placeholder.com/400" alt="softblue staff image" />
                </div>
                <img src="https://via.placeholder.com/800" alt="softblue staff image" />
              </div> --}}
            </div>
          </div>
          <div class="tab-pane" id="clients" role="tabpanel" aria-labelledby="clients-tab">
            <div class="our-clients">
              <img src="{{ asset('/images/interswitch.png') }}" alt="softblue clients"  />
              <img src="{{ asset('/images/venturegarden.png') }}" alt="softblue clients"  />
              <img src="{{ asset('/images/upwork.png') }}" alt="softblue clients"  />
            </div>
          </div>
        </div>
      </div>
    </section>
    @include('partials/hireus')
  </main>
@endsection


@section('footerlinks')
  <script src="{{ asset('js/tabs.js') }}"></script>
@endsection
