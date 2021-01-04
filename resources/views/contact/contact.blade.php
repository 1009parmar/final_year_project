@extends('main_nav.main_nav')
@section('title','Contact')
@section('content')


<!-- Start Contact Info
    ============================================= -->
<div class="contact-info-area ">
    <br>
    <div class="container">
        <div class="row">
            <div class="site-heading text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
        <!-- Start Contact Info -->
        <div class="contact-info text-center">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-call"></i>
                        </div>
                        <div class="info">
                            <h4>Call Us</h4>
                            <span>2782525354</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-location"></i>
                        </div>
                        <div class="info">
                            <h4>Address</h4>
                            <span>Government Engineering College, Nr. BPTI</span>
                            <span>, Vidyanagar, Bhavnagar</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="item">
                        <div class="icon">
                            <i class="flaticon-email"></i>
                        </div>
                        <div class="info">
                            <h4>Email Us</h4>
                            <span>gec-bhav-dte@gujarat.gov.in</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Contact Info -->

        <div class="row contact-bottom-info">
            <!-- Start Maps & Contact Form -->
            <div class="maps-form">
                <div class="col-md-6 maps">
                    <h4>Our Location</h4>
                    <div class="google-maps">
                        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=13uMHfeq--ZlJEUjx3P-eZqQz2bziBsau"></iframe>
                    </div>
                </div>
                <div class="col-md-6 form">
                    <div class="heading">
                        <h4>Contact Us</h4>
                    </div>
                    <form action="https://validtemplate.com/themeforest/educom/assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="form-group comments">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Me About Courses *"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <button type="submit" name="submit" id="submit">
                                    Send Message <i class="fa fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Alert Message -->
                        <div class="col-md-12 alert-notification">
                            <div id="message" class="alert-msg"></div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End Maps & Contact Form -->
        </div>
        <br>
    </div>
</div>
<!-- End Contact Info -->





@endsection