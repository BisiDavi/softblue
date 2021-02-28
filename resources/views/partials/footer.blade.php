<footer class="row pt-0">
  <div class="site-links container-fluid p-5 mb-5">
    <div class="row pt-5">
      <div class="col-lg-3 col-md-3 col-xl-3">
        <h5>LEARN MORE</h5>
        <ul class="footer-link">
          <li><a href="{{ url('/services') }}">Services</a></li>
          <li><a href="#showcase">Clients</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-xl-3">
        <h5>ABOUT US</h5>
        <ul class="footer-link">
          <li><a href="{{ url('/about') }}">About Softblueng</a></li>
          <li><a href="{{ url('/contact') }}">Get in touch</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-xl-3">
        <h5>CONTACT US</h5>
        <ul class="footer-link">
          <li>
            <b>Phone :</b>
            <span class="d-flex flex-column">
              <a href="tel:+234-803-059-1180">+(234)-803-059-1180</a> <br />
               <a href="tel:+234-706-967-1225"> +(234)-706-967-1225</a></span>
          </li>
          <li>
            <b>Email address:</b><a href="mailto:hello@softblue.com.ng"> hello@softblue.com.ng</a>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3 col-xl-3 openinghours">
        <h5>OPENING HOURS</h5>
        <p><b>Monday – Friday: 9:00am – 4:00pm</b></p>
      </div>
    </div>
    <div class="footer-divider"></div>
    <div class="row site-location justify-content-between mb-4 align-items-center">
      <div class="col-lg-3 h-50">
        <img src="{{ asset('images/softblue_logo_white.png')}}" class="footerlogo" alt="softblue logo" />
      </div>
      <div class="col-lg-3 our-address">
        <h5>Office Address:</h5>
        <p>33, T.E. Williams Street, K-Farm Estate, Lagos.</p>
      </div>
    </div>
  </div>
  <div class="site-address google-map container-fluid px-0">
    <div class="mapouter">
      <div class="gmap_canvas">
        <iframe width="948" height="500" id="gmap_canvas"
          src="https://maps.google.com/maps?q=33,%20T.E.%20Williams%20Street,%20K-Farm%20Estate,%20Lagos&t=&z=13&ie=UTF8&iwloc=&output=embed"
          frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        <a href="https://putlocker-is.org"></a>
        <br />
        <style>
          .mapouter {
            position: relative;
            text-align: right;
            height: 500px;
            width: 948px;
          }

        </style>
        <style>
          .gmap_canvas {
            overflow: hidden;
            background: none !important;
            height: 500px;
            width: 948px;
          }

        </style>
      </div>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="{{ asset('js/nav.js') }}"></script>
