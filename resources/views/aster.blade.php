<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"> --}}
    </script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" id="mainnav">
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
                        <a href="{{ url('/') }}" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link active">Features</a>
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
    <div>
        {{-- Showcase --}}
        <section class="bg-dark text-light p-5 text-center text-sm-start">
            <div class="container">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <div class="">
                        <h1>6 Workplaces - <span class="text-warning">1 PC</span> </h1>
                        <p class="lead  my-4">Create 6 workplaces from a single computer.</p>
                        <button class="btn btn-primary btn-lg text-light">Get a
                            free trial today</button>
                    </div>
                    <img src="{{ asset('img/one-pc-6-workplaces.png') }}" class="img-fluid w-50 d-none d-sm-block"
                        alt="Six workplaces from one PC">
                </div>
            </div>
        </section>
        {{-- Call to action --}}
        <section class="p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h3 class="mb-3 mb-md-0 text-center text-md-start">
                        Download your free trial
                    </h3>
                    <div class="input-group mb-3 mb-md-0 download-input">
                        <input type="text" class="form-control" placeholder="Enter email for download">
                        <button class="btn btn-primary text-light btn-lg" type="button">Download</button>
                    </div>
                </div>
            </div>
        </section>

        {{-- Features --}}
        {{-- Quick Start --}}
        <section id="features " class="pt-5 bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h1>Features</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="p-5 bg-dark text-light">
            <div class="container">
                <div class="row text-center g-4 ">
                    <div class="col-md">
                        <div class="card bg-light text-dark">
                            <div class="card-body text-center">
                                <div class="display-1 mb-3">
                                    <i class="bi bi-cpu"></i>
                                </div>
                                <h3 class="card-title mb-3">
                                    Utilize your PC full
                                </h3>
                                <p class="card-text">
                                    Did you know 60-70% of the comupting power of the computer is not utilized during
                                    use? With ASTER you can make full use of it for additional workplace.
                                </p>
                                {{-- <button class="btn btn-primary text-light">Get a free trial today</button> --}}
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
                                    Save on monthly electricty bill as ASTER workplace consume much less electricity
                                    than multiple standablone computer system.
                                </p>
                                {{-- <a href="#" class="btn btn-primary">Read more</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-light text-dark">
                            <div class="card-body text-center">
                                <div class="display-1 mb-3">
                                    <i class="bi bi-cash-coin"></i>
                                </div>
                                <h3 class="card-title mb-3">
                                    Lower TCO
                                </h3>
                                <p class="card-text">
                                    Save big on purchase of computer hardware when you use ASTER, instead of purchasing
                                    multiple standalone computer system.
                                </p>
                                {{-- <a href="#" class="btn btn-primary">Read more</a> --}}

                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="card bg-secondary text-light">
                            <div class="card-body text-center">
                                <div class="display-1 mb-3">
                                    <i class="bi bi-hdd-network"></i>
                                </div>
                                <h3 class="card-title mb-3">
                                    Single Network
                                </h3>
                                <p class="card-text">
                                    With ASTER you reduce the number of networking cables from 4-6 to just one, saving
                                    your from the hassle of networking each computer.
                                </p>
                                {{-- <a href="#" class="btn btn-primary">Read more</a> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Quick Start --}}
        <section id="quick-start" class="pt-5">
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
                        <img src="{{ asset('img/monitor.png') }}" alt="" class="img-fluid align-self-center">
                        <img src="{{ asset('img/usb_hdmi_dvi_vga_wifi.svg') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md">
                        <h2>Connect additional monitor/TV</h2>
                        <p class="lead">
                            You can connect monitor or TV to the computer using HDMI, DisplayPort, DVI,
                            VGA cables, USB Display adapters, and even wirelessly.
                        </p>
                        <p>
                            Depending on what port is available on your monitor, connect the monitors to the computer
                            and
                            set the in "Extend these displays" mode in Windows Display Settings.
                        </p>
                        <p>If you are using build-in video and graphics card, be sure to set intergrated graphics as
                            primary
                            in the BIOS</p>
                        <a href="#" class="btn btn-primary mt-3 text-light btn-lg"><i class="bi bi-download"></i> Get a
                            free 30-days trial now</a>
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
                            Connect additional keyboards, mice, audio device, gamepads and other devices to the
                            computer.
                        </p>
                        <p>
                            Using USB hub to connect the peripheral you can assign the hub as a whole to a workplace to
                            have
                            any new devices connected to it, automatically assigned to the workplace
                            This makes it easy to configure ASTER workplaces.
                        </p>
                        <p>Using bluetooth or wireless dongles for keyboard and mouse you can use a single USB port for
                            them. Thus freeing 1 usb port for other peripherals.
                        </p>
                        <a href="#" class="btn btn-primary mt-3 text-light btn-lg"><i class="bi bi-download"></i> Get a
                            free 30-days trial now</a>

                    </div>
                    <div class="col-md text-center">
                        <img src="{{ asset('img/multiseat-pc-connection-options.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row align-items-center justify-content-between g-5">

                    <div class="col-md text-center">
                        <img src="{{ asset('img/multiuser-laptop-connection-options.png') }}" alt=""
                            class="img-fluid">
                    </div>
                    <div class="col-md">
                        <h2>Program installation</h2>

                        <p class="lead">
                            Once the program - ASTER, is installed, configured and enabled. Each monitor/TV will display
                            its
                            desktop and users will be able to independently work and run programs and apps from one
                            computer.
                        </p>
                        <a href="#" class="btn btn-primary mt-3 text-light btn-lg"><i class="bi bi-download"></i> Get a
                            free 30-days trial now</a>

                    </div>
                </div>
            </div>
        </section>
        {{-- Pricing --}}
        <section id="pricing" class="p-5 bg-dark ">
            <div class="container">
                <div class="row py-5">
                    <div class="col text-center text-white">
                        <h1 class="d-inline-block mb-5">Pricing</h1>
                        <p class="lead">ASTER license is available to suit all your needs and can be purchased in local
                            currency from us.</p>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-info">
                            <div class="card-header py-3 bg-info text-white">
                                <h4 class="my-0 h2">ASTER Home</h4>
                            </div>
                            <div class="card-body px-0">
                                <h3 class="card-title h1 my-5">NRs. 1,500<small class="text-muted fw-light">/- *</small>
                                </h3>
                                <ul class="list-group list-group-flush fs-4 mb-3">
                                    <li class="list-group-item border-top">No. of Workplace: 2</li>
                                    <li class="list-group-item">Annual License</li>
                                    <li class="list-group-item">Non-expandable</li>
                                    <li class="list-group-item border-bottom">Non-transferrable</li>
                                </ul>
                                <button type="button" class="btn  btn-lg btn-outline-info  w-75">Order now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-success">
                            <div class="card-header py-3  bg-success text-white">
                                <h4 class="my-0 h2">ASTER Pro-2</h4>
                            </div>
                            <div class="card-body px-0">
                                <h3 class="card-title h1 my-5">NRs. 4,250<small class="text-muted fw-light">/- *</small>
                                </h3>
                                <ul class="list-group list-group-flush fs-4 mb-3">
                                    <li class="list-group-item border-top">No. of Workplace: 2</li>
                                    <li class="list-group-item">Lifetime License</li>
                                    <li class="list-group-item">Expandable up to 12 **</li>
                                    <li class="list-group-item border-bottom">Transferrable ***</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-success w-75 text-white">Order now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm border-primary">
                            <div class="card-header py-3 text-white bg-primary border-primary">
                                <h4 class="my-0 h2">ASTER Pro-6</h4>
                            </div>
                            <div class="card-body px-0">
                                <h3 class="card-title h1 my-5">NRs. 8,625<small class="text-muted fw-light">/-*</small>
                                </h3>
                                <ul class="list-group list-group-flush fs-4 mb-3">
                                    <li class="list-group-item border-top">No. of Workplace: 6</li>
                                    <li class="list-group-item">Lifetime License</li>
                                    <li class="list-group-item">Expandable up to 12 **</li>
                                    <li class="list-group-item border-bottom">Transferrable ***</li>
                                </ul>
                                <button type="button" class="btn btn-lg btn-outline-primary w-75">Order now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col text-white">
                        <p>* prices are excluding VAT</p>
                        <p>** activation additional Pro-1, Pro-2 or Pro-6 license will add 1,2 or 6 workplace respectly
                            to
                            the computer</p>
                        <p>*** license should be deactivation from ASTER before upgrading your computer system disk (HDD
                            or
                            SSD/Nvme) or processor (CPU), or using the
                            license on another computer</p>
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
                <div class="accordion accordion-flush fs-5" id="frequent-questions">
                    <div class="accordion-item ">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-1">
                                How do I know if my computer support creating multiple workplace?
                            </button>
                        </h2>
                        <div id="faq-1" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                            data-bs-parent="#frequent-questions">
                            <div class="accordion-body">Does your computer have additional video port to connect an
                                additional monitor or TV ? Then yes, you can create additional workplace from your
                                computer.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-2">
                                Is Windows 10 operating system supported by ASTER?
                            </button>
                        </h2>
                        <div id="faq-2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                            data-bs-parent="#frequent-questions">
                            <div class="accordion-body">Yes, ASTER support Windows 7/8 and Windows 10. However, ASTER
                                doesnot support any preview builds of Windows 10.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-3">
                                Is it easy to setup?
                            </button>
                        </h2>
                        <div id="faq-3" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                            data-bs-parent="#frequent-questions">
                            <div class="accordion-body">ASTER has a wizard which start once you have installed ASTER
                                which
                                will help you to setup the workplaces.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-4">
                                How can I transfer the license to another computer?
                            </button>
                        </h2>
                        <div id="faq-4" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                            data-bs-parent="#frequent-questions">
                            <div class="accordion-body">You should perform the deactivation procedure from ASTER Control
                                to
                                deactivate the license. Once, deactivation has been confirmed in ASTER Control, you will
                                get
                                a new key to use on your new computer.</div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-5">
                                What are the minimum hardware specification required for 6 workplaces setup?
                            </button>
                        </h2>
                        <div id="faq-5" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                            data-bs-parent="#frequent-questions">
                            <div class="accordion-body row ">
                                <dt class="col-sm-2">CPU</dt>
                                <dd class="col-sm-10">
                                    <p>Intel Core i7 or AMD Ryzen 7 (with integrated graphics preferred)</p>
                                </dd>
                                <dt class="col-sm-2">Motherboard</dt>
                                <dd class="col-sm-10">
                                    <p>Compatible to your choice of CPU (2-3 video ports) </p>
                                </dd>
                                <dt class="col-sm-2">RAM</dt>
                                <dd class="col-sm-10">
                                    <p>16 GB or more (Compatible with the choice of Motherboard) </p>
                                </dd>
                                <dt class="col-sm-2">Storage</dt>
                                <dd class="col-sm-10">
                                    <p>256GB SSD (SSD for OS and program) </p>
                                </dd>
                            </div>
                        </div>

                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faq-6">
                                Can I create a workplace even without a monitor?
                            </button>
                        </h2>
                        <div id="faq-6" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                            data-bs-parent="#frequent-questions">
                            <div class="accordion-body">Yes, you can create additional workplace with the help of
                                dummy
                                video adapter. These video adapter simulate a monitor and allow it to run headless.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- Customers --}}
        {{-- <section class="p-5 bg-primary">
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
                                    Satya Narayan Manandhar
                                </h3>
                                <p class="card-text">Deployed 16 workplace from 4 computers for computer lab back in
                                    2015</p>
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
                                    Swoniga Finance
                                </h3>
                                <p class="card-text">Deployed 4 workplaced from 2 PC back in 2013</p>
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
        </section> --}}

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
    </div>
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
    <script>
        window.addEventListener('DOMContentLoaded', event => {

            // Activate Bootstrap scrollspy on the main nav element
            const mainNav = document.body.querySelector('#mainNav');
            if (mainNav) {
                new bootstrap.ScrollSpy(document.body, {
                    target: '.navbar',
                    offset: 74,
                });
            };

            // Collapse responsive navbar when toggler is visible
            const navbarToggler = document.body.querySelector('.navbar-toggler');
            const responsiveNavItems = [].slice.call(
                document.querySelectorAll('.nav-link')
            );
            responsiveNavItems.map(function(responsiveNavItem) {
                responsiveNavItem.addEventListener('click', () => {
                    if (window.getComputedStyle(navbarToggler).display !== 'none') {
                        navbarToggler.click();
                    }
                });
            });

        });

    </script>
</body>

</html>
