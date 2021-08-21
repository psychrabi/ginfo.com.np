<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'G. Info Services Pvt. Ltd.') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">G. Info Services</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{url('/')}}" class="nav-link">Go Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#quick-start" class="nav-link">Quick Start</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pricing" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="#faqs" class="nav-link">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- Showcase --}}
    <section class="bg-dark text-light p-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div class="">
                    <h1>6 Workplaces - <span class="text-warning">1 PC</span> </h1>
                    <p class="lead  my-4">Create 6 workplaces from a single computer.</p>
                    <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#download-form">Get a
                        free trial today</button>
                </div>
                <img src="{{asset('img/one-pc-6-workplaces.png')}}" class="img-fluid w-50 d-none d-sm-block"
                    alt="Six workplaces from one PC">
            </div>
        </div>
    </section>
    {{-- Call to action --}}
    <section class="bg-primary text-light p-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-center">
                <h3 class="mb-3 mb-md-0 text-center text-md-start">
                    Download your free trial
                </h3>
                <div class="input-group mb-3 mb-md-0 download-input">
                    <input type="text" class="form-control" placeholder="Enter email for download">
                    <button class="btn btn-dark" type="button">Download</button>
                </div>
            </div>
        </div>
    </section>

    {{-- Features --}}
    <section class="p-5" id="features">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="display-1 mb-3">
                                <i class="bi bi-cpu"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Utilize your PC full
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit facere itaque
                                necessitatibus repudiandae quos labore!
                            </p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-secondary text-light">
                        <div class="card-body text-center">
                            <div class="display-1 mb-3">
                                <i class="bi bi-lightning-charge"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Save power usage
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit facere itaque
                                necessitatibus repudiandae quos labore!
                            </p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card bg-dark text-light">
                        <div class="card-body text-center">
                            <div class="display-1 mb-3">
                                <i class="bi bi-cash-coin"></i>
                            </div>
                            <h3 class="card-title mb-3">
                                Lower TCO
                            </h3>
                            <p class="card-text">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit facere itaque
                                necessitatibus repudiandae quos labore!
                            </p>
                            <a href="#" class="btn btn-primary">Read more</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Quick Start --}}
    <section id="quick-start" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1>Quick Start</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between g-5">
                <div class="col-md text-center">
                    <img src="{{asset('img/monitor.png')}}" alt="" class="img-fluid align-self-center">
                    <img src="{{asset('img/usb_hdmi_dvi_vga_wifi.svg')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md">
                    <h2>Connect additional monitor/TV</h2>
                    <p class="lead">
                        You can connect monitor or TV to the computer using HDMI, DisplayPort, DVI,
                        VGA cables, USB Display adapters, and even wirelessly.
                    </p>
                    <p>
                        Depending on what port is available on your monitor, connect the monitors to the computer and
                        set the in "Extend these displays" mode in Windows Display Settings.
                    </p>
                    <p>If you are using build-in video and graphics card, be sure to set intergrated graphics as primary
                        in the BIOS</p>
                    <a href="#" class="btn btn-primary mt-3"><i class="bi bi-chevron-right"></i> Read more</a>
                </div>
            </div>
        </div>
    </section>
    <section class="p-5 bg-dark">
        <div class="container">
            <div class="row align-items-center justify-content-between g-5">
                <div class="col-md text-light">
                    <h2>Connection additional peripheral</h2>
                    <p class="lead">
                        Connect additional keyboards, mice, audio device, gamepads and other devices to the computer.
                    </p>
                    <p>
                        Using USB hub to connect the peripheral you can assign the hub as a whole to a workplace to have
                        any new devices connected to it, automatically assigned to the workplace
                        This makes it easy to configure ASTER workplaces.
                    </p>
                    <p>Using bluetooth or wireless dongles for keyboard and mouse you can use a single USB port for
                        them. Thus freeing 1 usb port for other peripherals.
                    </p>
                    <a href="#" class="btn btn-light mt-3"><i class="bi bi-chevron-right"></i> Read more</a>
                </div>
                <div class="col-md text-center">
                    <img src="{{asset('img/multiseat-pc-connection-options.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center justify-content-between g-5">

                <div class="col-md text-center">
                    <img src="{{asset('img/multiuser-laptop-connection-options.png')}}" alt="" class="img-fluid">
                </div>
                <div class="col-md">
                    <h2>Program installation</h2>

                    <p class="lead">
                        Once the program - ASTER, is installed, configured and enabled. Each monitor/TV will display its
                        desktop and users will be able to independently work and run programs and apps from one
                        computer.
                    </p>
                    <a href="#" class="btn btn-primary mt-3"><i class="bi bi-download"></i> Get a free 30-days trial
                        now</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Frequently Asked Auestions --}}
    <section id="faqs" class="p-5">
        <div class="container">
            <h2 class="text-center mb-4">
                Frequently Asked Questions
            </h2>
            <div class="accordion accordion-flush" id="frequent-questions">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-1">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="faq-1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#frequent-questions">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                            body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-2">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="faq-2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#frequent-questions">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                            body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-3">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="faq-3" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                        data-bs-parent="#frequent-questions">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                            body. Nothing more exciting happening here in terms of content, but just filling up the
                            space to make it look, at least at first glance, a bit more representative of how this would
                            look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-4">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="faq-4" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                        data-bs-parent="#frequent-questions">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                            body. Nothing more exciting happening here in terms of content, but just filling up the
                            space to make it look, at least at first glance, a bit more representative of how this would
                            look in a real-world application.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faq-5">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="faq-5" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                        data-bs-parent="#frequent-questions">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to
                            demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                            body. Nothing more exciting happening here in terms of content, but just filling up the
                            space to make it look, at least at first glance, a bit more representative of how this would
                            look in a real-world application.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Customers --}}
    <section class="p-5 bg-primary">
        <div class="container">
            <h2 class="text-center text-white">Our Customers</h2>
            <p class="lead text-center text-white mb-5">
                Our happy customer who are using ASTER in many places.
            </p>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/11.jpg" class="rounded-circle mb-3">
                            <h3 class="card-title mb-3">
                                John Doe
                            </h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eius
                                necessitatibus molestiae magni, illo recusandae?</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/11.jpg" class="rounded-circle mb-3">
                            <h3 class="card-title mb-3">
                                Jane Doe
                            </h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eius
                                necessitatibus molestiae magni, illo recusandae?</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/men/12.jpg" class="rounded-circle mb-3">
                            <h3 class="card-title mb-3">
                                John Smith
                            </h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eius
                                necessitatibus molestiae magni, illo recusandae?</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card bg-light">
                        <div class="card-body text-center">
                            <img src="https://randomuser.me/api/portraits/women/12.jpg" class="rounded-circle mb-3">
                            <h3 class="card-title mb-3">
                                Sarah Smith
                            </h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et eius
                                necessitatibus molestiae magni, illo recusandae?</p>
                            <a href="#"><i class="bi bi-twitter text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-facebook text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-linkedin text-dark mx-1"></i></a>
                            <a href="#"><i class="bi bi-instagram text-dark mx-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact --}}

    <section class="p-5" id="contact">
        <div class="container">
            <div class="row g-4">
                <div class="col-md">
                    <h2 class="text-center mb-4">Contact Info</h2>
                    <ul class="list-group list-group-flush lead">
                        <li class="list-group-item"><span class="fw-bold">Address: </span>
                            140 Samskhushi Marg, Kathmandu
                        </li>
                        <li class="list-group-item"><span class="fw-bold">Contact: </span>
                            9860240841, 9813098760
                        </li>
                        <li class="list-group-item"><span class="fw-bold">Email: </span>
                            <a href="mailto:rabi@ginfo.com.np" class="">rabi@ginfo.com.np</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.9389058669685!2d85.31024891453858!3d27.71917253158014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18e28a318bc7%3A0xabe25be07a0a0055!2sG.%20Info%20Services%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1623831486575!5m2!1sen!2snp"
                            allowfullscreen="false" loading="lazy" class="w-100 h-100"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="p-5 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; G. Info Services 2021</p>
            <a href="#" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="download-form" tabindex="-1" aria-labelledby="exampleModalLabel"
        data-bs-backdrop="static" data-bs-keyboard="false" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
