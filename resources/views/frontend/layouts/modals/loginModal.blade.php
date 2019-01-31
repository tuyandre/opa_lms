
<style>
    .modal-dialog {
        margin: 1.75em auto;
        min-height: calc(100vh - 60px);
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    #myModal .close{
        position: absolute;
        right: 0.3rem;
    }

    @media (max-width: 768px) {
        .modal-dialog {
            min-height: calc(100vh - 20px);
        }
        #myModal .modal-body{
            padding: 15px;
        }
    }

</style>
@if(!auth()->check())
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header backgroud-style">

                    <div class="gradient-bg"></div>
                    <div class="popup-logo">
                        <img src="{{asset('assets/img/logo/p-logo.jpg')}}" alt="">
                    </div>
                    <div class="popup-text text-center">
                        <h2>Login Your Account.</h2>
                        <p><a href="#" class="font-weight-bold go-login px-0">Login</a> to our website, or <a href="#" class="font-weight-bold go-register px-0" id="">REGISTER</a>
                        </p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <div class="tab-content">
                        <div class="tab-pane container active" id="login">

                            <span class="error-response text-danger"></span>
                            <span class="success-response text-success"></span>
                            <form class="contact_form" id="loginForm" action="{{route('frontend.auth.login.post')}}" method="POST" enctype="multipart/form-data">
                                <a href="#" class="go-register float-left text-info pl-0">New
                                    User? Register Here</a>
                                <div class="contact-info mb-2">
                                    {{ html()->email('email')
                                        ->class('form-control mb-0')
                                        ->placeholder(__('validation.attributes.frontend.email'))
                                        ->attribute('maxlength', 191)
                                        ->required() }}
                                </div>
                                <div class="contact-info mb-2">
                                    {{ html()->password('password')
                                                     ->class('form-control mb-0')
                                                     ->placeholder(__('validation.attributes.frontend.password'))
                                                     ->required() }}
                                    <a class="text-info p-0 d-block text-right my-2"
                                       href="{{ route('frontend.auth.password.reset') }}">@lang('labels.frontend.passwords.forgot_password')</a>
                                </div>

                                <div class="nws-button text-center white text-capitalize">
                                    <button type="submit" value="Submit">Log in Now</button>
                                </div>
                            </form>

                            <div id="socialLinks" class="text-center">
                            </div>

                        </div>
                        <div class="tab-pane container fade" id="register">

                            <form id="registerForm"  class="contact_form" action="{{  route('frontend.auth.register.post')}}"
                                  method="post">
                                {!! csrf_field() !!}
                                <a href="#" class="go-login float-right text-info pr-0">Already a
                                    user? Login Here</a>
                                <div class="contact-info mb-2">


                                    {{ html()->text('first_name')
                                        ->class('form-control mb-0')
                                        ->placeholder(__('validation.attributes.frontend.first_name'))
                                        ->attribute('maxlength', 191) }}
                                    <span id="first-name-error" class="text-danger"></span>
                                </div>
                                <div class="contact-info mb-2">
                                    {{ html()->text('last_name')
                                      ->class('form-control mb-0')
                                      ->placeholder(__('validation.attributes.frontend.last_name'))
                                      ->attribute('maxlength', 191) }}
                                    <span id="last-name-error" class="text-danger"></span>

                                </div>

                                <div class="contact-info mb-2">
                                    {{ html()->email('email')
                                       ->class('form-control mb-0')
                                       ->placeholder(__('validation.attributes.frontend.email'))
                                       ->attribute('maxlength', 191)
                                       }}
                                    <span id="email-error" class="text-danger"></span>

                                </div>
                                <div class="contact-info mb-2">
                                    {{ html()->password('password')
                                        ->class('form-control mb-0')
                                        ->placeholder(__('validation.attributes.frontend.password'))
                                         }}
                                    <span id="password-error" class="text-danger"></span>
                                </div>
                                <div class="contact-info mb-2">
                                    {{ html()->password('password_confirmation')
                                        ->class('form-control mb-0')
                                        ->placeholder(__('validation.attributes.frontend.password_confirmation'))
                                         }}
                                </div>

                                <div class="contact-info mb-2 mx-auto w-50 py-4">
                                    <div class="nws-button text-center white text-capitalize">
                                        <button type="submit" value="Submit">Register  Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
@endif

@push('after-scripts')
    <script>

        $(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function () {
                $(document).on('click', '.go-login', function () {
                    $('#register').removeClass('active').addClass('fade')
                    $('#login').addClass('active').removeClass('fade')

                });
                $(document).on('click', '.go-register', function () {
                    $('#login').removeClass('active').addClass('fade')
                    $('#register').addClass('active').removeClass('fade')
                });
            })


            $(document).on('click', '#openLoginModal', function (e) {
                $.ajax({
                    type: "GET",
                    url: "{{route('frontend.auth.login')}}",
                    success: function (response) {
                        $('#socialLinks').html(response.socialLinks)
                        $('#myModal').modal('show');
                    },
                });
            });

            $('#loginForm').on('submit', function (e) {
                e.preventDefault();

                var $this = $(this);

                $.ajax({
                    type: $this.attr('method'),
                    url: $this.attr('action'),
                    data: $this.serializeArray(),
                    dataType: $this.data('type'),
                    success: function (response) {
                        if (response.success) {
                            $('#loginForm')[0].reset();
                            if (response.redirect == 'back') {
                                location.reload();
                            } else {
                                window.location.href = "{{route('admin.dashboard')}}"
                            }
                        }
                    },
                    error: function (jqXHR) {
                        var response = $.parseJSON(jqXHR.responseText);
                        if (response.message) {
                            $('#login').find('span.error-response').html(response.message)
                        }
                    }
                });
            });

            $('#registerForm').on('submit', function (e) {
                e.preventDefault();
                var $this = $(this);

                $.ajax({
                    type: $this.attr('method'),
                    url: $this.attr('action'),
                    data: $this.serializeArray(),
                    dataType: $this.data('type'),
                    success: function (data) {
                        $('#first-name-error').empty()
                        $('#last-name-error').empty()
                        $('#email-error').empty()
                        $('#password-error').empty()
                        if (data.errors) {
                            if (data.errors.first_name) {
                                $('#first-name-error').html(data.errors.first_name[0]);
                            }
                            if (data.errors.last_name) {
                                $('#last-name-error').html(data.errors.last_name[0]);
                            }
                            if (data.errors.email) {
                                $('#email-error').html(data.errors.email[0]);
                            }
                            if (data.errors.password) {
                                $('#password-error').html(data.errors.password[0]);
                            }
                        }
                        if (data.success) {
                            $('#registerForm')[0].reset();
                            $('#register').removeClass('active').addClass('fade')
                            $('#login').addClass('active').removeClass('fade')
                            $('.success-response').html('Registration Successful. Please LogIn');
                        }
                    }
                });
            });

        });
    </script>
@endpush