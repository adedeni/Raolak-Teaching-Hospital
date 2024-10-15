<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Raolak Teaching Hospital" description="This is a Teaching Hospital website">
    <meta name="keywords" content="healthcare, doctor, emergency, patients">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css?v=4.47">
    <link rel="shortcut icon" href="icons/favicon.png">
    <title>Home</title> 
</head>
<body>
    <header>
        <a href="index.php" class="logo"><img class="logo" src="icons/logo.png" alt="Hospital logo"></a>
        <nav>
            <ul class="ul-left">
                <li><a class="dropdown-toggle" href="#">Laboratories <br>and Libraries <img class="arrowdown" width="18px" height="18px" src="icons/arrowdown.png" alt="#"></a>
                    <ul class="dropdown">
                        <li><a href="#">Hematology Lab</a></li>
                        <li><a href="#">Blood Bank</a></li>
                        <li><a href="#">Molecular Diagnostics Lab</a></li>
                        <li><a href="#">Assisted Reproductive <br> Lab and Sperm Bank</a></li>
                    </ul>
                </li>
                <li><a class="dropdown-toggle" href="#">Clinics and <br>Departments <img class="arrowdown" width="18px" height="18px" src="icons/arrowdown.png" alt="#"></a>
                    <ul class="dropdown">
                        <li><a href="#">Accident and emergency (A&E) and Intensive Care Unit (ICU)</a></li>
                        <li><a href="#">Cardiology and General Surgery</a></li>
                        <li><a href="#">Disease and Infection Control</a></li>
                        <li><a href="#">Obstetrics/Gynecology and Oncology</a></li>
                    </ul></li>
                <li><a class="dropdown-toggle" href="#">Medical Research <br>and Education <img class="arrowdown" width="18px" height="18px" src="icons/arrowdown.png" alt="#"></a>
                    <ul class="dropdown">
                        <li><a href="#">Postdoctoral Fellowships</a></li>
                        <li><a href="#">Training Grant Programs</a></li>
                        <li><a href="#">RAOLAK Clinic College of Medicine and Science</a></li>
                    </ul>
                </li>
                <li><a class="dropdown-toggle" href="#">Clinical Trials <br>and Drug-Test <img class="arrowdown" width="18px" height="18px" src="icons/arrowdown.png" alt="#"></a>
                    <ul class="dropdown">
                        <li><a href="#">Pilot and Feasibility Studies</a></li>
                        <li><a href="#">Prevention Trials and Test</a></li>
                        <li><a href="#">Cross-sectional studies</a></li>
                        <li><a href="#">Case-control studies</a></li>
                    </ul>
            </ul>
            <ul class="ul-right">
                    <li><a href="portfolio/login.php" target="_blank">Login <svg  style="padding-left: 7px;"  width="19px" height="19px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#000000" d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464l349.5 0c-8.9-63.3-63.3-112-129-112l-91.4 0c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3z"/></svg>
                    </a></li>
                    <li>
                        <a href="portfolio/signup.php" target="_blank">Register <svg  style="padding-left: 7px;"  width="20px" height="20px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="#000000" d="M96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM0 482.3C0 383.8 79.8 304 178.3 304l91.4 0C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7L29.7 512C13.3 512 0 498.7 0 482.3zM504 312l0-64-64 0c-13.3 0-24-10.7-24-24s10.7-24 24-24l64 0 0-64c0-13.3 10.7-24 24-24s24 10.7 24 24l0 64 64 0c13.3 0 24 10.7 24 24s-10.7 24-24 24l-64 0 0 64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg></a>
                    </li>
                    <li>
                       
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <script>
  // dropdown and arrow rotation script
document.querySelectorAll('.dropdown-toggle').forEach(toggle => {
    toggle.addEventListener('click', function(event) {
        event.preventDefault();  // Prevent default anchor behavior

        // Find the corresponding dropdown menu and arrow icon
        const dropdownMenu = this.nextElementSibling;
        const arrowIcon = this.querySelector('.arrowdown');

        // Toggle the dropdown visibility and arrow rotation
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        arrowIcon.classList.toggle('arrow-up');

        // Close other open dropdowns and reset other arrows
        document.querySelectorAll('.dropdown').forEach(menu => {
            if (menu !== dropdownMenu) {
                menu.style.display = 'none';
                const otherArrow = menu.parentElement.querySelector('.arrowdown');
                if (otherArrow) {
                    otherArrow.classList.remove('arrow-up');
                }
            }
        });
    });
});

// Close dropdown if clicking outside the dropdown area
document.addEventListener('click', function(event) {
    if (!event.target.closest('.dropdown-toggle')) {
        document.querySelectorAll('.dropdown').forEach(menu => {
            menu.style.display = 'none';  // Hide all dropdowns
            const arrowIcon = menu.parentElement.querySelector('.arrowdown');
            if (arrowIcon) {
                arrowIcon.classList.remove('arrow-up');  // Reset arrow rotation
            }
        });
    }
});

</script>
    <main>
        <div class="banner">
            <p>The Zenith of Global Healthcare</p><span>Learn how we drive innovation</span><img width="15px" height="15px" src="icons/arrow.png" alt=""><a class="book" href="#">Book appointment with us</a>
        </div>
        <section class="mainwrapper">
                <div class="row1">
                    <div class="box1">
    
                    </div>
                    <div class="indexright">
                        <h1>Healing starts here</h1>
                        <h2>The right answers the first time</h2>
                        <p>Effective treatment depends on getting the right diagnosis. Our experts diagnose and treat the toughest medical challenges.</p>
                        <h2>Top-ranked in the Nigeria</h2>
                        <p>RAOLAK Clinic has more No. 1 rankings than any other hospital in the nation according to Punch News & World Report. <a class="indexright-a" href="#">Learn more about our top-ranked specialties.</a><br>
                            <a class="indexbotton" href="#">Why choose RAOLAK Clinic</a>
                        </p>
                    </div>
                </div>
                <div class="row2">
                    <div class="indexleft">
                        <h1>World-class care for global patients</h1>
                        <p>We make it easy for patients around the world to get care from RAOLAK Clinic.</p>
                        <a class="indexbotton" href="#">International services</a>
                    </div>
                    <div class="box2">
    
                    </div>
                </div>
        </section>
        <div class="row3">
            <div class="r3box1">
                <h1>Locations</h1><p>Learn more about RAOLAK Clinic locations or choose a specific location.</p>
                <a class="indexbotton" href="#">Explore all locations</a>
                
            </div>
            <div class="r3box2">
                <h2>RAOLAK Clinic in Abuja</h2>
                <p>The Presidential Villa, Aso Rock</p>
            </div>
            <div class="r3box3">
                <h2>RAOLAK Clinic in Ibadan</h2>
                <p>RAOLAK HUB, Iyana Church</p>
            </div>
        </div>
        <div class="row4">
            <div class="r4box1">
                <h1>Featured care areas</h1>
                <p>
                    We solve the world's most serious and complex medical challenges.
                </p>
            </div>
            <div class="r4box2">
                <ul>
                    <li>
                        <a href="#">Bone marrow transplant</a>
                    </li>
                    <li>
                        <a href="#">Brain aneurysm</a>
                    </li>
                    <li>
                        <a href="#">Brain tumor</a>
                    </li>
                    <li>
                        <a href="#">Breast cancer</a>
                    </li>
                    <li>
                        <a href="#">Colon cancer</a>
                    </li>
                    <li>
                        <a href="#">Glioma</a>
                    </li>
                    <li>
                        <a href="#">Congenital heart disease</a>
                    </li>
                </ul>                
            </div>
            <div class="r4box3">
                <ul>
                    <li>
                        <a href="#">Heart arrhythmia</a>
                    </li>
                    <li>
                        <a href="#">Heart valve disease</a>
                    </li>
                    <li>
                        <a href="#">Living-donor transplant</a>
                    </li>
                    <li>
                        <a href="#">Lung transplant</a>
                    </li>
                    <li>
                        <a href="#">Sarcoma</a>
                    </li>
                    <li>
                        <a href="#">Testicular cancer</a>
                    </li>
                    <li>
                        <a href="#">Artificial Insemination and IVF</a>
                    </li>
                </ul>    
            </div>
        </div>
        <div class="lastdiv">
            <img src="icons/donate.png" alt="#"><h1>Your gift holds great power – donate today! <br><span>Make your tax-deductible gift and be a part of the cutting-edge research and care that's changing medicine.</span></h1>
            <a href="#">Donate</a>
        </div>
    </main>
    <footer>
        <div class="footer_wrapper">
            <div class="footer1">
                <div class="column1">
                <ul  class="footer_box">
                    <li class="topic"><a href="#">Charity and Philanthropism</a></li>
                    <li><a href="#">Charitable Care & Financial Assistance</a></li>
                    <li><a href="#">Public Health Needs Assessment</a></li>
                    <li><a href="#">Financial Assistance Documents</a></li>
                    <li><a href="#">WHO-SDGs and other charities</a></li>
                </ul>
                <br>
                <ul class="list_one">
                    <li class="topic"><a href="about.html" target="_blank">About Raolak Clinic</a></li>
                    <li><a href="about.html" target="_blank">About Us</a></li>
                    <li><a href="contact.html" target="_blank">Contact Us</a></li>
                    <li><a href="#">Location</a></li>
                    <li><a href="#">Health Information Policy</a></li>
                    <li><a href="#">Media</a></li>
                    <li><a href="#">News and Updates</a></li>
                </ul>
            </div>
            <div class="column2">
                <ul>
                    <li class="topic"><a href="#">Medical Professionals</a></li>
                    <li><a href="#">Clinical Trials</a></li>
                    <li><a href="#">Ask our Experts</a></li>
                    <li><a href="#">Refer a Patient</a></li>
                    <br>
                    <li class="topic"><a href="#">Business</a></li>
                    <li><a href="#">Executive Health Enterprise</a></li>
                    <li><a href="#">International Business Collaboration</a></li>
                    <li><a href="#">Medical Equipment Supply</a></li>
                    <br>
                    <li class="topic"><a href="#">Student Programs and Intership</a></li>
                    <li><a href="#">Admissions Requirements</a></li>
                    <li><a href="#">Interships and Summer Classes</a></li>
                    <li><a href="#">Professional Courses</a></li>
                </ul>
            </div>
            <div class="column3">
                <ul>
                    <li class="topic"><a href="#">Researches and Innovations</a></li>
                    <li><a href="#">Research Laboratories</a></li>
                    <li><a href="#">Medical Innovations</a></li>
                    <br>
                    <li class="topic" href="#"><a href="#">International Patients</a></li>
                    <li><a href="#">Appointments</a></li>
                    <li><a href="#">Loans and Payment Plans</a></li>
                    <li><a href="#">International Locations & Offices</a></li>
                    <br>
                    <a href="#">
                        <li class="finddoctor">
                            <img class="steth" height="30px" width="30px" src="icons/steth.png" alt="stethoscope"><p>Find a doctor</p><img class="arrow" height="15px" width="15px" src="icons/arrow.png" alt="arrow">
                        </li>
                    </a>
                    <br>
                    <a href="#">
                        <li class="newsletter">
                            <img class="mail" height="30px" width="30px" src="icons/mail.png" alt="newsletter"><p>Sign-up for <br>our newsletter</p><img class="arrow" height="15px" width="15px" src="icons/arrow.png" alt="arrow">
                        </li>
                    </a>
                </ul>
            </div>
            </div>
            <div class="footer2">
                <div class="c1r3">
                    <br>
                    <p>Raolak Clinic Mobile App</p>                 
                   <div>
                    <a href="#"><img src="icons/playstore.png" alt="googleplay"></a>
                    <a href="#"><img src="icons/appstore.png
                        " alt="appstore"><a> 
                   </div>
                <br>
            </div>
            <div>
                <p>Connect with us</p> <br>
            </div>
            <div class="socialicon"><a href="#"><img src="icons/x.png" alt="twitter"></a>
                <a href="#"><img src="icons/youtube.png" alt="youtube"></a>
                <a href="#"><img src="icons/facebook.png" alt="facebook"></a>
                <a href="#"><img src="icons/linkedin.png" alt="linkedin"></a>
                <a href="#"><img src="icons/instagram.png" alt="instagram"></a></div>
        </div>
            </div>
        </div>
        <div class="aquacolor">
            <div class="tandc">
                <a href="#"><p>Terms & Conditions</p></a>
                <a href="#"><p>Privacy Policy</p></a>
                <a href="#"><p>Site Map</p></a>               
            </div>
            <br> <br> <br>
            <div class="allright">
                <p>©2024 Group-2 Raolak School Class 2024. All rights reserved.</p>
                <p class="lang">Language:    English</p>
            </div>
    </footer>
</body>
</html>