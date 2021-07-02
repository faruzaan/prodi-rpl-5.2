@extends('templates/header')
@section('contents')
<!-- Inner Page Banner Area Start Here -->
<div class="inner-page-banner-area" style="background-image: url('{{asset('assets')}}/img/f-36.jpg');">
    <div class="container">
        <div class="pagination-area">
            <h1>Kontak</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a> -</li>
                <li>Kontak</li>
            </ul>
        </div>
    </div>
</div>
<!-- Inner Page Banner Area End Here -->
<!-- Contact Us Page 1 Area Start Here -->
<div class="contact-us-page1-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="contact-us-info1">
                    <ul>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <h3>Phone</h3>
                            <p>+62 (22) 7801840</p>
                        </li>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <h3>Address</h3>
                            <p>Jl. Raya Cibiru KM 15, <br> Kabupaten Bandung</p>
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <h3>E-mail</h3>
                            <p>rpl_cibiru@upi.edu</p>
                        </li>
                        <li>
                            <h3>Follow Us</h3>
                            <ul class="contact-social">
                                <li><a href="https://www.facebook.com/rplupi" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://twitter.com/upi_rpl" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.linkedin.com/school/universitaspendidikanindonesia-upi/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCueWOgTEtpw-mUmbIElRlMA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/rpl_upi/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h2 class="title-default-left title-bar-high">Kontak Dengan Kami</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="contact-form1">
                        <form id="contact-form">
                            <fieldset>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Nama*" class="form-control" name="name" id="form-name" data-error="Name field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" placeholder="Email*" class="form-control" name="email" id="form-email" data-error="Email field is required" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea placeholder="Pesan*" class="textarea form-control" name="message" id="form-message" rows="8" cols="20" data-error="Message field is required" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-sm-12">
                                    <div class="form-group margin-bottom-none">
                                        <button type="submit" class="default-big-btn">Send Message</button>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-6 col-sm-12">
                                    <div class='form-response'></div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="google-map-area">
                <div id="googleMap" style="width:100%; height:395px;"></div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Us Page 1 Area End Here -->
@endsection
