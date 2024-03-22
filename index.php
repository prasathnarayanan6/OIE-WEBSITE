<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Office of Innovation and Entrepreneurship - IIT Madras</title>
    <link rel="icon" href="./img/OIE_LOGO.png" type="image/icon type">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-... (the hash will vary)" crossorigin="anonymous" />
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style>
        .navbar-nav .nav-item {
            margin-right: 50px; 
        }
        @font-face {
            font-family: 'josefinsans';
            src: url('./Josefin_Sans/static/JosefinSans-Medium.ttf');
        }
        body {
           font-family: 'josefinsans';
           background-color: #04193c;
           /* background-image: url('./img/Copy of Sridhar Vembu's Visit  (1).jpeg'); */
        }
        .navbar-nav .nav-item:hover .nav-link:hover{
            color: black;
            scale: 1.67px;
        }
        .bg-transparent {
            background-color: transparent !important;
        }
        .navbar {
            margin-top: 0; /* Adjust this value as needed */
            /* position: fixed; */
            /* margin-left:auto; */
        }
        .carousel-item img {
            max-height: 100%;
            min-height: 100%;
            width: 100%;
            object-fit: cover; 
        }
        .underline {
            text-decoration: underline;
            line-height: 1.5; 
            border-bottom: 5px solid transparent; 
            padding-bottom: 5px; 
            display: inline-block; 
        }
        .line-height
        {
            line-height: 1.5;
        }
        .round
        {
            border-radius: 0px;
        }
        .round:hover
        {
            opacity: 0.5;
            color: rgba(76, 175, 80, 0.3);
        }
        .text-sm
        {
            font-size: 13px;
        }
        .scroll-transition {
                scroll-behavior: smooth;
                transition: scroll-behavior 0.5s ease-in-out;
        }
        .linkedin-logo {
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
            width: 50px;
            height: 50px;
            z-index: 999;
        }
        .round:hover .linkedin-logo {
            display: block;
        }
        .nav-link:hover
        {
            scale: 1.2;
        }
        #cookieBanner {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f0f0f0;
            padding: 10px 20px;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
            z-index: 9999;
        }
        #cookieBanner p {
            margin: 0px;
        }
        #cookieBanner button {
            margin: 5px;
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            font-size: 13px;
        }
        #cookieBanner button:hover {
            background-color: #0056b3;
        }
        footer {
            /* background-color: #f8f9fa; */
            padding: 20px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="cookieBanner" style="display: none;">
        <p class="text-dark">We use cookies to enhance your web browsing experience. By continuing to browse the site you agree to our policy on cookie usage.</p>
        <button id="acceptButton">Accept</button>
        <button id="rejectButton">Reject</button>
    </div>
    <section class="nav-section">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="#">
                <img src="./img/I_E_Logo__White_BG___1_-removebg-preview.png" width="100px">
                <img src="./img/iitm logo.png" width="50px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#home"><b><span class="text-danger"><b>|</b></span> Home <span class="text-success"><b>|</b></span></b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#about-us"><b><span class="text-danger"><b>|</b></span> About Us <span class="text-success"><b>|</b></span></b></a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link text-white" href="#careers"><b><span class="text-danger"><b>|</b></span> Careers <span class="text-success"><b>|</b></span></b></a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="#media"><b><span class="text-danger"><b>|</b></span> Media <span class="text-success"><b>|</b></span></b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contact-us"><b><span class="text-danger"><b>|</b></span> Contact Us <span class="text-success"><b>|</b></span></b></a>
                </li>
                </ul>
            </div>
        </nav>
    </section>
    <!-- body section -->
    <section class="home slides" id="home">
        <div class="container-fluid">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <center><div class="carousel-item active">
                            <img class="d-block w-50" src="./img/IMG_1474.jpg" alt="First slide">
                        </div></center>
                        <center><div class="carousel-item">
                            <img class="d-block w-50" src="./img/IMG_2347.jpg" alt="Second slide">
                        </div></center>
                        <center><div class="carousel-item">
                            <img class="d-block w-50" src="./img/IMG_1451.jpg" alt="Third slide">
                        </div></center>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
        </div>
    </section><br><br>
    <section class="body-section">
        <div class="container">
            <div>
                <center><h4 class="text-white"><b>WHAT <span class="text-warning">WE DO</span></b></h4></center>
                <center><p class="text-white" style="line-height: 2.0;">The Office of Innovation & Entrepreneurship (OIE) aims to synchronize all the I&E activities of IIT Madras and create a pipeline of scalable and impactful startups. It serves as the overarching entity that encompasses CFI (Center of Innovation) and Nirmaan, the Pre-Incubator nested within it. The Office is based out of the Sudha & Shankar Innovation Hub which was inaugurated by the Hon’ble Vice-President of India on 28th February 2023.</p></center><br><br>
                <center>
                <div class="row">
                    <div class="col-md-4">
                        <a href="https://cfi.iitm.ac.in/"><img src="./img/CFI Logo - White-6966b7c8 (1).png" alt="" width="190px;"></a><br>
                    </div>
                    <div class="col-md-4">
                        <a href="https://www.iitm.ac.in/"><img src="./img/iitm logo (1).png" alt="" width="130px;"></a><br>
                    </div>
                    <div class="col-md-4">
                        <a href="http://nirmaan.iitm.ac.in/"><img src="./img/Nirmaan Logo (1).png" alt="" width="130px;"></a><br>
                    </div>
                </div>
                </center><br><br>
                <!-- <center><p class="text-white mt-3"></p></center><br><br> -->
                <center><h4 class="text-white mt-4"><b>OUR <span class="text-warning">VISION</b></span></h4></center>
                <center><p class="text-white mt-3">To deliver administrative support to innovation & entrepreneurship activities that include outreach, fundraising, project management, IP, and funding.</p></center><br>
                <center><h4 class="text-white mt-4"><b>OUR <span class="text-warning">MISSION</span></h4></b></center>
                <center><p class="text-white mt-3" style="line-height: 2.0;">To provide training in entrepreneurship through structured programs and guidance through experienced and visionary leadership to coordinate events, visits, workshops, and external programs, generating leads for future advancements.</p></center>
            </div><br>
            <div class="our-team mt-4" id="about-us">
                <center><h4 class="text-white"><b>OUR <span class="text-warning">TEAM</span></b></h4></center>
                <center>
                <div class="row mb-3 mt-5">
                    <div class="col-md-6 col-12 position-relative">
                        <div class="round">
                            <img src="./img//facultyadvisor.svg" alt="" width="240px">
                            <a href="https://www.linkedin.com/in/prabhu-rajagopal-041ab74/"><span class="linkedin-logo text-dark" style="font-size: 38px;"><i class="fab fa-linkedin"></i></span></a>
                            <!-- <img src="./img/linkedin_plain_logo_icon_146432.png" class="linkedin-logo" alt="LinkedIn Logo" width="10px"> -->
                        </div>
                        <p class="text-white mt-1 text-sm">PROF. PRABHU RAJAGOPAL<br><span class="text-secondary text-sm">FACULTY IN-CHARGE</span></p>
                    </div> 
                    <div class="col-md-6 col-12 position-relative">
                        <div class="round">
                            <img src="./img/Screenshot 2024-03-18 172358.png" class="" alt="" width="200px">
                            <a href="https://www.linkedin.com/in/nandhini-k-s-71777748/"><span class="linkedin-logo text-dark" style="font-size: 38px;"><i class="fab fa-linkedin"></i></span></a>
                        </div>
                        <p class="text-white mt-1 text-sm">NANDHINI K S<br><span class="text-secondary text-sm">MANAGER OIE</span></p>
                    </div>
                </div>
                </center>
                <center>
                <div class="row mt-2">
                    <div class="col-md-3 col-12 position-relative">
                        <div class="round">
                            <img src="./img/1647960498440.jpeg" class="" alt="" width="200px">
                            <a href="https://www.linkedin.com/in/nandhini-k-s-71777748/"><span class="linkedin-logo text-dark" style="font-size: 30px;"><i class="fab fa-linkedin"></i></span></a>
                        </div>
                       <p class="text-white mt-1 text-sm">SUNDARRAJ E<br><span class="text-secondary text-sm">PROJECT MANAGER - OIE</span></p>
                    </div>
                    <div class="col-md-3 col-12 position-relative">
                        <div class="round">
                            <img src="./img/DSC_0028-removebg-preview (1) (1).png" class="" alt="" width="200px">
                            <a href="https://www.linkedin.com/in/nandhini-k-s-71777748/"><span class="linkedin-logo text-dark" style="font-size: 30px;"><i class="fab fa-linkedin"></i></span></a>
                        </div>
                       <p class="text-white mt-1 text-sm">KRISHNAVENI<br><span class="text-secondary text-sm">FINANCE MANAGER - OIE</span></p>
                    </div>
                    <div class="col-md-3 col-12 position-relative">
                        <div class="round">
                            <img src="./img/Snapchat-1935090135__1_-removebg-preview (2).png" class="" alt="" width="200px">
                            <a href="https://www.linkedin.com/in/prasath-narayanan-595204191/"><span class="linkedin-logo text-dark" style="font-size: 30px;"><i class="fab fa-linkedin"></i></span></a>
                        </div>
                       <p class="text-white mt-1 text-sm">PRASATH NARAYANAN<br><span class="text-secondary text-sm">TECHNICAL SUPPORT - OIE</span></p>
                    </div>
                    <div class="col-md-3 col-12 position-relative">
                        <div class="round">
                            <img src="./img/file.jpg" class="" alt="" width="200px">
                            <a href="https://www.linkedin.com/in/nandhini-k-s-71777748/"><span class="linkedin-logo text-dark" style="font-size: 30px;"><i class="fab fa-linkedin"></i></span></a>
                        </div>
                       <p class="text-white mt-1 text-sm">SATYAJIT SEAL<br><span class="text-secondary text-sm">CONTENT MANAGER - OIE</span></p>
                    </div>
                <div>
                <div class="row mt-3">
                    <div class="col-md-4 col-12 position-relative">
                        <div class="round">
                            <img src="./img/WhatsApp Image 2024-03-21 at 6.08.39 PM (1) (2).jpeg" class="" alt="" width="200px">
                            <a href="https://www.linkedin.com/in/nandhini-k-s-71777748/"><span class="linkedin-logo text-dark" style="font-size: 30px;"><i class="fab fa-linkedin"></i></span></a>
                        </div>   
                        <p class="text-white mt-1 text-sm">SASI<br><span class="text-secondary text-sm">FACILITY MANAGER - OIE</span></p>  
                    </div>
                    <div class="col-md-4 col-12 position-relative">
                        <div class="round">
                            <img src="./img/WhatsApp Image 2024-03-21 at 6.00.09 PM (2).jpeg" class="" alt="" width="200px">
                            <a href="https://www.linkedin.com/in/nandhini-k-s-71777748/"><span class="linkedin-logo text-dark" style="font-size: 30px;"><i class="fab fa-linkedin"></i></span></a>
                        </div>   
                        <p class="text-white mt-1 text-sm">VELANKANI<br><span class="text-secondary text-sm">SENIOR OFFICE ASSISTANT - OIE</span></p>  
                    </div>
                    <div class="col-md-4 col-12 position-relative">
                        <div class="round">
                            <img src="./img/file.jpg" class="" alt="" width="200px">
                            <a href="https://www.linkedin.com/in/nandhini-k-s-71777748/"><span class="linkedin-logo text-dark" style="font-size: 30px;"><i class="fab fa-linkedin"></i></span></a>
                        </div>   
                        <p class="text-white mt-1 text-sm">SRIRAM<br><span class="text-secondary text-sm">JUNIOR TECHNICIAN - OIE</span></p>  
                    </div>
                </div>
                </center>
            </div>
        </div>
    </section>
    <section id="media">
        <center><h4 class="text-white pt-5"><b>ME<span class="text-warning">DIA</span></b></h4></center>

    </section>
    <section id="contact-us">
        <footer>
            <div class="container text-center">
                <h4 class="text-white"><b>CONTACT<span class="text-warning"> US</span></b></h4>
                <p class="text-white">manager.ie@imail.iitm.ac.in</p>
                <p class="text-white">+91 123-456-7890</p>
                <p class="text-white">Sudha & Shankar Innovation Hub, IIT Madras</p>
                <span class="text-white">© 2024 Office of Innovation and Entrepreneurship, IIT Madras</span>
            </div>
        </footer>
    </section>
    <script>
        const cookiesAccepted = localStorage.getItem('cookiesAccepted');
        if (cookiesAccepted === null) {
            document.getElementById('cookieBanner').style.display = 'block';
        }
        document.getElementById('acceptButton').addEventListener('click', () => {
            localStorage.setItem('cookiesAccepted', 'true');
            document.getElementById('cookieBanner').style.display = 'none';
        });
        document.getElementById('rejectButton').addEventListener('click', () => {
            localStorage.setItem('cookiesAccepted', 'false');
            document.getElementById('cookieBanner').style.display = 'none';
        });
    document.addEventListener("DOMContentLoaded", function() {
        const aboutUsLink = document.querySelector('a[href="#about-us"]');
        const mediaLink = document.querySelector('a[href="#media"]');
        const home = document.querySelector('a[href="#home"]');
        const contactUs = document.querySelector('a[href="#contact-us"');
        aboutUsLink.addEventListener("click", function(event) {
            event.preventDefault();
            const section = document.getElementById("about-us");
            section.scrollIntoView({ behavior: "smooth" });
            document.body.classList.add("scroll-transition");
            setTimeout(function() {
                document.body.classList.remove("scroll-transition");
            }, 500); 
        });
        mediaLink.addEventListener("click", function(event) {
            event.preventDefault();
            const section = document.getElementById("media");
            section.scrollIntoView({ behavior: "smooth" });
            document.body.classList.add("scroll-transition");
            setTimeout(function() {
                document.body.classList.remove("scroll-transition");
            }, 500); 
        });
        home.addEventListener("click", function(event) {
            event.preventDefault();
            const section = document.getElementById("home");
            section.scrollIntoView({ behavior: "smooth" });
            document.body.classList.add("scroll-transition");
            setTimeout(function() {
                document.body.classList.remove("scroll-transition");
            }, 500); 
        });
        contactUs.addEventListener("click", function(event) {
            event.preventDefault();
            const section = document.getElementById("contact-us");
            section.scrollIntoView({ behavior: "smooth" });
            document.body.classList.add("scroll-transition");
            setTimeout(function() {
                document.body.classList.remove("scroll-transition");
            }, 500); 
        });
    });
    </script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
