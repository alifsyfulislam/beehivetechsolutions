@extends('front-end.master')


@section('title')
    {{"Beehive | $name"}}
@endsection


@section('body')
    {{--breadcrumbs--}}
    @include('front-end.common.breadcrumbs')
    {{--contact--}}
    <section class="section section-md bg-white">
        <div class="container container_bigger">
            <div class="row justify-content-md-center justify-content-xl-between row-2-columns-bordered row-50">
                <div class="col-md-10 col-lg-5">
                    <h3>Get in Touch</h3>
                    <ul class="list-creative">
                        <li>
                            <dl class="list-terms-medium list-terms-medium_secondary">
                                <dt>Address</dt>
                                <dd>
                                    <a href="#"><strong>Main Office:</strong> House 12, Road 24/1, Block C, Avenue 5, Section 11, Mirpur, Dhaka 1216</a>
                                </dd>
                                <dd>
                                    <a href="#"><strong>Branch Office:</strong> Akbar-hat, Sandwip, Chattogram - 4300</a>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-medium">
                                <dt>Phones</dt>
                                <dd>
                                    <ul class="list-comma">
                                        <li>
                                            <a href="tel:+8801975366900">+880 19753 66900</a>
                                        </li>
                                        <li>
                                            <a href="tel:+8801975366911">+880 19753 66911</a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="list-terms-medium list-terms-medium_tertiary">
                                <dt>E-mails</dt>
                                <dd>
                                    <ul class="list-comma">
                                        <li><a href="mailto:info@beehivetechsolutions.com">info@beehivetechsolutions.com</a></li>
                                    </ul>
                                </dd>
                            </dl>
                        </li>
                    </ul>
                </div>
                <div class="col-md-10 col-lg-7 col-xl-6">
                    <h3 class="text-center">Contact Form</h3>
                    <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact">
                        <div class="row row-20">
                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" placeholder="Your Name" id="contact-name" type="text" name="name">
                                </div>
                                <span class="text-danger" id="nameErrorMsg"></span>
                            </div>

                            <div class="col-md-6">
                                <div class="form-wrap">
                                    <input class="form-input" placeholder="Phone" id="contact-phone" type="text" name="phone">
                                </div>
                                <span class="text-danger" id="phoneErrorMsg"></span>
                            </div>

                            <div class="col-md-12">
                                <div class="form-wrap">
                                    <input class="form-input" placeholder="E-mail" id="contact-email" type="email" name="email">
                                </div>
                                <span class="text-danger" id="emailErrorMsg"></span>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-wrap">
                                    <textarea rows="10" placeholder="Your Message" style="resize: none" class="form-input" id="contact-message" name="message"></textarea>
                                </div>
                                <span class="text-danger" id="messageErrorMsg"></span>
                            </div>

                            <div class="col-md-6">
                                <button class="button button-block button-secondary button-ujarak" type="submit">Send Message</button>
                            </div>

                            <div class="alert alert-success text-center" role="alert" id="successMsg" style="display: none" >
                                Thank you for getting in touch!
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{--map--}}
    <section class="section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.5169871536464!2d90.37642085143415!3d23.816182694472943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7565878d325%3A0x3a93cc7e7d37859f!2sBeehive%20Tech%20Solutions!5e0!3m2!1sen!2sus!4v1634457895497!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" margin="0" loading="lazy"></iframe>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

    <script>
        $('.rd-mailform').on('submit',function(e){
            e.preventDefault();

            let name    = $('#contact-name').val();
            let email   = $('#contact-email').val();
            let phone   = $('#contact-phone').val();
            let message = $('#contact-message').val();

            $('#nameErrorMsg').text('');
            $('#emailErrorMsg').text('');
            $('#phoneErrorMsg').text('');
            $('#messageErrorMsg').text('');

            $.ajax({
                url     : "https://www.dev.beehivetechsolutions.com/public/send-message",
                type    : "POST",
                data    :{
                    "_token" : "{{ csrf_token() }}",
                    name     : name,
                    email    : email,
                    phone    : phone,
                    message  : message,
                    status   : 0,
                },
                success :function(response){
                    if (response.status == 200)
                    {
                        $('#contact-name').val('');
                        $('#contact-email').val('');
                        $('#contact-phone').val('');
                        $('#contact-message').val('');
                        $('#successMsg').show();
                        setTimeout(()=>{
                            $('#successMsg').hide();
                        },3e3)
                    } else{
                        response.errors.map((error)=>{
                            if (error.includes('name')){
                                $('#nameErrorMsg').text(error.toLowerCase());
                            }
                            else if (error.includes('email')){
                                $('#emailErrorMsg').text(error.toLowerCase());
                            }
                            else if (error.includes('phone')){
                                $('#phoneErrorMsg').text(error.toLowerCase());
                            }
                            else if (error.includes('message')){
                                $('#messageErrorMsg').text(error.toLowerCase());
                            }
                        })
                    }
                },
                error   : function(response) {
                    console.log(response);
                },
            });
        });
    </script>
@endsection