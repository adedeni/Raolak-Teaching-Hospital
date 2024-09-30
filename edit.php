<?php
require_once "includes/config.inc.php";
require_once "includes/edit_model.inc.php";
if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
     die();
 }
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Raolak Teaching Hospital" description="This is a Teaching Hospital website">
    <meta name="keywords" content="healthcare, doctor, emergency, patients">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="edit.css?v=2.0">
    <link rel="shortcut icon" href="icons/favicon.png">
    <title>Patient Dashboard</title> 
</head>
<body>
    <header>
        <a href="#" class="logo"><img class="logo" src="icons/logo.png" alt="Hospital logo"></a>
        <nav>
            <ul class="ul-left">
                <li><a href="#">Laboratories <br>and Libraries <img width="18px" height="18px" src="icons/arrowdown.png" alt="#"></a>
                    <ul class="dropdown">
                        <li><a href="#">Hematology Lab</a></li>
                        <li><a href="#">Blood Bank</a></li>
                        <li><a href="#">Molecular Diagnostics Lab</a></li>
                        <li><a href="#">Assisted Reproductive <br> Lab and Sperm Bank</a></li>
                    </ul>
                </li>
                <li><a href="#">Clinics and <br>Departments <img width="18px" height="18px" src="icons/arrowdown.png" alt="#"></a>
                    <ul class="dropdown">
                        <li><a href="#">Accident and emergency (A&E) and Intensive Care Unit (ICU)</a></li>
                        <li><a href="#">Cardiology and General Surgery</a></li>
                        <li><a href="#">Disease and Infection Control</a></li>
                        <li><a href="#">Neurology and Ophthalmology</a></li>
                        <li><a href="#">Obstetrics/Gynecology and Oncology</a></li>
                    </ul></li>
                <li><a href="#">Medical Research <br>and Education <img width="18px" height="18px" src="icons/arrowdown.png" alt="#"></a>
                    <ul class="dropdown">
                        <li><a href="#">Postdoctoral Fellowships</a></li>
                        <li><a href="#">Training Grant Programs</a></li>
                        <li><a href="#">RAOLAK Clinic College of Medicine and Science</a></li>
                    </ul>
                </li>
                <li><a href="#">Clinical Trials <br>and Drug-Test <img width="18px" height="18px" src="icons/arrowdown.png" alt="#"></a>
                    <ul class="dropdown">
                        <li><a href="#">Pilot and Feasibility Studies</a></li>
                        <li><a href="#">Prevention Trials and Test</a></li>
                        <li><a href="#">Cross-sectional studies</a></li>
                        <li><a href="#">Case-control studies</a></li>
                    </ul>
            </ul>
            <ul class="ul-right">
                    <li><a href="#">Book appointment</a></li>
                    <li>
                    <form action="includes/logout.inc.php" method="POST">
           <a href="login.php">Logout</a>
   </form>
                    </li>
                    <li>
                        <form action="#" method="post">
                            <div class="search-container">
                                <label for="text"></label>
                                <input class="search" type="text" name="text" id="#" placeholder="Search by keyword">
                                <button type="submit" class="search-button"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="wrapper">
           <div class="firstcolumn">
            <h4>General</h4><br>
            <div class="dashicon">
                <img width="20px" height="20px" src="icons/dashboard.png" alt=""><h3><a style="text-decoration: none;" href="dashboard.php">Dashboard</a></h3>
            </div>
            <div class="dashicon">
                <img width="20px" height="20px"  src="icons/appointment.png" alt=""><h3>Appointment</h3> <br>
            </div>
            <div class="dashicon">
                <img width="20px" height="20px"  src="icons/medication.png" alt=""><h3>Medication</h3>
            </div>
            <br> <br> <br>            
            <h4>Tools</h4> <br>
            <div class="toolicon">
                <img width="20px" height="20px"  src="icons/chats.png" alt=""><h3>Chat</h3> <br>
            </div>
            <div class="toolicon">
                <img width="20px" height="20px"  src="icons/support.png" alt=""><h3>Support</h3> <br>
            </div>
           </div>
           
           <div class="secondcolumn">
           <h1>Profile Update</h1>
    <h4>
    <form action="includes/edit.inc.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($_SESSION['user_username']); ?>" style="border: none; font-weight: bold; text-transform: uppercase;" readonly>
            <br><label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullName" value="<?php echo htmlspecialchars($_SESSION['user_fullName']);?>" style="font-weight: bold; text-transform: uppercase;" required>
            <br><label for="new_password">Password:</label>
            <input type="password" id="new_password" name="crpwd" placeholder="Input Password" required>
            <br><label for="address">Address:</label>
            <input class="address" type="text" id="address" name="address" placeholder="Input your address" value="<?php echo htmlspecialchars($_SESSION['user_address']); ?>">
            <br><label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($_SESSION["user_email"]); ?>" required>
            <br><label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" value="<?php echo htmlspecialchars($_SESSION['user_phone']); ?>" required>
            <button class="update" type="submit">Update Details</button>
            <?php
        check_edit_errors();
        ?>
    </form>
    </h4>
    </div>
           <div class="thirdcolumn">

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
                    <li class="topic"><a href="#">About Raolak Clinic</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
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