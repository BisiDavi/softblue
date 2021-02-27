@extends('layout')

@section('title')
  Contact Us
@endsection

@section('page-banner')
  <div class="container-fluid">
              <div class="hero-jumbotron row">
                <div class="hero-text col-lg-8 col-md-6 col-sm-12">
                  <h1 class="jumbo-text">
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
                <div class="hero-animation col-lg-4 col-md-6 col-sm-12">
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
      <section class="contact-form container py-5">
        <div class="row py-5">
          <div class="col-lg-12">
            <h1 class="jumbo-text text-center">CONTACT US</h1>
            <p class="text-center mb-2 w-50 mx-auto d-flex">
              Thank you for your interest in SoftBlue Nigeria. We will be glad
              to answer all your questions as well as estimate any project of
              yours.
              <br />
              Please fill your project requirements in detail and other
              information. Your request will be processed accurately by our
              specialists and we will get back to you shortly.
            </p>

            <form class="contact-form d-flex flex-column mx-auto">
              <div id="formOne" class="form-one col-lg-12">
                <input
                  type="text"
                  placeholder="Full Name*"
                  class="form-control form-control-lg"
                  required
                />
                <input
                  type="text"
                  placeholder="Phone*"
                  class="form-control form-control-lg"
                  required
                />
                <input
                  type="email"
                  placeholder="Email*"
                  class="form-control form-control-lg"
                  required
                />
                <input
                  type="text"
                  placeholder="Company name*"
                  id="company"
                  class="form-control form-control-lg mx-auto w-50"
                  required
                />
                <input
                  type="text"
                  placeholder="Country*"
                  id="country"
                  class="form-control form-control-lg"
                  required
                />
                <div class="input-group mx-auto w-50 mb-3">
                  <select
                    class="custom-select form-control form-control-lg"
                    id="services"
                    required
                  >
                    <option selected>Services Required.</option>
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
                <div class="input-group mx-auto w-50 mb-3">
                  <div class="custom-file">
                    <input
                      type="file"
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
                <div class="input-group mx-auto w-50 mb-3">
                  <select
                    class="custom-select form-control form-control-lg"
                    id="services"
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
                  placeholder="Project Description (max of 5000 characters)*"
                  id="projectDescription"
                  rows="10"
                  required
                ></textarea>
              </div>
              <button type="submit" class="btn btn-dark mx-auto d-flex my-5">
                Submit
              </button>
            </form>
          </div>
        </div>
      </section>
      <section class="hire-us about-us container-fluid px-0">
        <div class="row py-5">
          <div class="text-content mx-auto d-flex flex-column w-50 col-lg-6">
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
