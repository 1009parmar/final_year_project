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
                    <h2>Feedback Us</h2>
                </div>
            </div>
        </div>


        <div class="row contact-bottom-info ">
            <!-- Start Maps & Contact Form -->
            <div class="maps-form container">

                <div class="col-md-12 form row">
                    <form action="https://validtemplate.com/themeforest/educom/assets/mail/contact.php" method="POST" class="contact-form">
                        <div class="col-md-5 ">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="name" name="name" placeholder="Name" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 ">
                            <div class="form-group">
                                <input class="form-control" id="name" type="hidden" name="name" placeholder="Name" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 ">
                            <div class="form-group">
                                <input class="form-control" id="name" type="hidden" name="name" placeholder="Name" type="text">
                                <span class="alert-error"></span>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="row">
                                <div class="form-group">
                                    <input class="form-control" id="phone" name="subject" placeholder="Subject" type="text">
                                    <span class="alert-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-11">
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