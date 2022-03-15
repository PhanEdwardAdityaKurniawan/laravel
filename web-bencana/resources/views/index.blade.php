@extends('layout.default')
@section('content')
<div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="owl-carousel owl-banner">
                <div class="item header-text">
                  <h6>Selamat Datang LaporBencana</h6>
                  <!-- <h2>Kami <em>Memberikan</em>Tindakan<span>Tercepat</span>?</h2> -->
                  <p>Kami Membatun Dan Memberikan Pelayanan Terhadap Bencana Dengan Cepat</p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a href="#contact">Lapor Bencana Sekarang</a>
                    </div>
                    <div class="call-button">
                      <a href="https://wa.me/62888802842497"><i class="fa fa-phone"></i>LaporBencana</a>
                    </div>
                  </div>
                </div>
                <div class="item header-text">
                  <h6>Online Marketing</h6>
                  <h2>Get the <em>best ideas</em> for <span>your website</span></h2>
                  <p>You are NOT allowed to redistribute this template ZIP file on any Free CSS collection websites. Contact us for more info. Thank you.</p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a href="#services">Our Services</a>
                    </div>
                    <div class="call-button">
                    <a href="https://wa.me/62888802842497"><i class="fa fa-phone"></i>LaporBencana</a>
                    </div>
                  </div>
                </div>
                <div class="item header-text">
                  <h6>Video Tutorials</h6>
                  <h2>Watch <em>our videos</em> for your <span>projects</span></h2>
                  <p>Please <a rel="nofollow" href="https://www.paypal.me/templatemo" target="_blank">support us</a> a little via PayPal if this digital marketing HTML template is useful for you. Thank you.</p>
                  <div class="down-buttons">
                    <div class="main-blue-button-hover">
                      <a href="#video">Watch Videos</a>
                    </div>
                    <div class="call-button">
                    <a href="https://wa.me/62888802842497"><i class="fa fa-phone"></i>LaporBencana</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="section-heading">
            <!-- <h2>Feel free to <em>Contact</em> us via the <span>HTML form</span></h2>
            <div id="map">
              <iframe src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
            <div class="info">
              <span><i class="fa fa-phone"></i> <a href="#">010-020-0340<br>090-080-0760</a></span>
              <span><i class="fa fa-envelope"></i> <a href="#">info@company.com<br>mail@company.com</a></span>
            </div> -->
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <form id="contact" action="" method="get">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Nama" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Lokasi" autocomplete="on" required>
                </fieldset>\
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="\" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="telp" name="notelp" id="website" placeholder="Phone Number" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                <label for="exampleFormControlTextarea1" class="form-label">Keterangan Bencana </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button">Submit Request</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="contact-dec">
      <img src="{{asset('onix/assets/images/contact-dec.png') }}" alt="">
    </div>
    <div class="contact-left-dec">
      <img src="{{asset('onix/assets/images/contact-left-dec.png')}}" alt="">
    </div>
  </div>
@endsection
