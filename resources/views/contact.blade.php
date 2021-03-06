@extends('layouts.pages')

@section('title')
  Contact Us
@endsection

@section('cssLink')
  <link rel="stylesheet" href="{{ asset('css/contact.mediaquery.css') }}" />
@endsection
@section('page-banner')
  <div class="container-fluid contactpage">
    <div class="hero-jumbotron row">
      <div class="hero-text col-lg-6 col-md-6 col-sm-12">
        <h1 class="jumbo-text mb-5">
          START YOUR PROJECT
          <br />
          WITHIN 10 DAYS
        </h1>
        <span class="divider divider-pink"></span>
        <p>
          Assemble a dedicated team that fits your project's needs, on
          demand.
        </p>
      </div>
      <div class="hero-animation col-lg-6 col-md-6 col-sm-12">
        <span class="animationsvg contact-page">
          <img
            src="/images/contact-us.jpg"
            alt="contact us at softblue"
          />
        </span>
      </div>
    </div>
  </div>
@endsection

@section('content')
  <main class="row bg-white">
      <section class="contact-form container">
        <div class="row">
          <div class="col-lg-12 my-3">
            <h1 class="jumbo-text text-center">CONTACT US</h1>
            <p class="text-center mb-2 mx-auto d-flex">
              Thank you for your interest in SoftBlue Nigeria. We will be glad
              to answer all your questions as well as estimate any project of
              yours.
              <br />
              Please fill your project requirements in detail and other
              information. Your request will be processed accurately by our
              specialists and we will get back to you shortly.
            </p>

            @if(count($errors) > 0)
            <div class="alert alert-danger">
              <button class="close" type="button" data-dismiss="alert">x</button>
              <ul>
                @foreach ($errors -> all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif

            @if ($message = Session::get('success'))
              <div class="alert alert-success alert-block">
                <buton class="close" data-dismiss="alert" type="button">x</buton>
                <strong>{{ $message }}</strong>
              </div>
            @endif
            <form method="post" class="contact-form d-flex flex-column mx-auto" action="{{ url('contact/send') }}">
              {{ csrf_field() }}
              <div id="formOne" class="form-one col-lg-12">
                <input
                  type="text"
                  name="fullName"
                  value=""
                  placeholder="Full Name*"
                  class="form-control form-control-lg"
                  required
                />
                <input
                  type="text"
                  name="phone"
                  value=""
                  placeholder="Phone*"
                  class="form-control form-control-lg"
                  required
                />
                <input
                  type="email"
                  name="email"
                  value=""
                  placeholder="Email*"
                  class="form-control form-control-lg"
                  required
                />
                <input
                  type="text"
                  value=""
                  name="company"
                  placeholder="Company name*"
                  id="company"
                  class="form-control form-control-lg mx-auto w-50"
                  required
                />
                <input
                  type="text"
                  name="country"
                  value=""
                  placeholder="Country*"
                  id="country"
                  class="form-control form-control-lg"
                  required
                />
                <div class="input-group mx-auto w-50 mb-3 select">
                  <select
                    class="custom-select form-control form-control-lg"
                    id="services"
                    value=""
                    name="services"
                    required
                  >
                    <option class="selected" selected>Services Required.</option>
                    <option value="IT Consultancy">IT Consultancy</option>
                    <option value="Software Development">
                      Software Development
                    </option>
                    <option value="Enterprise Application Integrations">
                      Enterprise Application Integrations
                    </option>
                    <option value="Web/Mobile Application Development">
                      Web/Mobile Application Development
                    </option>
                    <option value="Financial and Trading Systems">
                      Financial and Trading Systems
                    </option>
                    <option value="E-commerce (B2B/B2C) Systems">
                      E-commerce (B2B/B2C) Systems
                    </option>
                  </select>
                </div>
                <div class="input-group mx-auto w-50 mb-3 upload">
                  <div class="custom-file file">
                    <input
                      type="file"
                      name="uploadFile"
                      value=""
                      class="custom-file-input form-control form-control-lg"
                      placeholder="Upload file"
                      id="uploadfile"
                    />
                    <label
                      class="custom-file-label"
                      for="uploadfile"
                      aria-describedby="inputGroupFileAddon02"
                      >Upload File (optional)</label
                    >
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text" id="inputGroupFileAddon02"
                      >Upload</span
                    >
                  </div>
                </div>
                <div class="input-group mx-auto w-50 mb-3 select">
                  <select
                    class="custom-select form-control form-control-lg"
                    id="services"
                    name="hearAboutUs"
                    value=""
                    required
                  >
                    <option selected>How did you hear about us?</option>
                    <option value="LinkedIn">LinkedIn</option>
                    <option value="Google">Google</option>
                    <option value="Referral">Referral</option>
                    <option value="Others">Others</option>
                  </select>
                </div>
                <textarea
                  class="form-control"
                  name="projectDescription"
                  placeholder="Project Description (max of 5000 characters)*"
                  id="projectDescription"
                  rows="10"
                  required
                ></textarea>
              </div>
              <button type="submit" name="send" value="Submit" class="btn btn-dark mx-auto d-flex my-5">
                Submit
              </button>
            </form>
          </div>
        </div>
      </section>
      <section class="hire-us about-us container-fluid px-0">
        <div class="row py-5">
          <div class="text-content mx-auto d-flex flex-column col-lg-6">
            <p class="my-3">
              Let’s help you build the software solution you need to scale your
              business
            </p>
            <h1>WE ARE THE RIGHT TEAM FOR YOUR BUSINESS</h1>
          </div>
        </div>
      </section>
    </main>
@endsection
