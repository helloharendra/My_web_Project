 <?php 
if (isset($_POST['submit'])) {
    $ToEmail = 'tutorialstudyhub@gmail.com'; 
    $EmailSubject = 'StudyHubTutorial Contact'; 
    $mailheader = "From: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"]."<br>"; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>";
    $MESSAGE_BODY .= "Contact : ".$_POST["contact"]."<br>";
    $MESSAGE_BODY .= "Subject : ".$_POST["subject"]."<br>";
    $MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])."<br>"; 
   if ( mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure")){
       echo "<script>alert('Enquiry submitted successfully')</script>";
   } else {
       echo "<script>alert('Something went wrong')</script>";
   }
}

?>

<!DOCTYPE html>
<!-- Created By Harendra Prajapati -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    <link rel="stylesheet" href="loader.css">

  
 </head>

 <body >
    <div id="preloader"></div>

    <div class="scroll-up-btn">
        <i class="fas fa-angle-uFscp"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            
            <div class="logo"><a href="#">Port<span>Folio</span></a></div>
            <ul class="menu">
                <li><a href="index.html" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#teams" class="menu-btn">Teams</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="login.html" class="menu-btn">Login</a></li>
                
                
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    
    

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello,I am</div>
                <div class="text-2">Harendra Prajapati</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="videos/hireme.mp4">Hire me</a>
                <a href="login.html"  >Login</a><br><br><br>
                <div><p >Login to access my Live Projects and Codes its total Free*</p></div>
            </div>
        </div>
    </section>



    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/myprofile1.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Harendra and I'm a <span class="typing-2"></span></div>
                    <p><tt> style="font-size: 20;">Hi everyone i am glad to tell you that i am MCA student,
                        I have completed BCA in 2021.I am looking for a development role because of interested in coding. I have learnt C, C++, HTML, CSS,CORE JAVA, ADVANCE JAVA,JAVA SCRIPT
                        PYTHON, MYSQL DATABASE AND BASIC COMMANDS OF UNIX & LINUX and persuing
                        to learn MACHINE LEARNING AND DEEP LEARNING. <br><br></tt></p>
                    <a href="cv/harendraPrajapatiCv.pdf">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Web Design</div>
                        <p>I and my Team provide a responsive and creative websites to user. </p>
                        <p>testing mode</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Youtube</div>
                        <p>Me and my team provide study materials on Youtube to student who want to learn coading. And also provide Youtube channels And customization.  .</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Apps Design</div>
                        <p>We also provide apps to user.</p>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p><tt style="font-size: 20;">Hi everyone i am glad to tell you that i am MCA student,
                        I have completed BCA in 2021.I am looking for a development role because of interested in coding. I have learnt C, C++, HTML, CSS,CORE JAVA, ADVANCE JAVA,JAVA SCRIPT
                        PYTHON, MYSQL DATABASE AND BASIC COMMANDS OF UNIX & LINUX and persuing
                        to learn MACHINE LEARNING AND DEEP LEARNING. <br><br></p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>60%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>java</span>
                            <span>80%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My teams</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/myprofile.jpg" alt="">
                        <div class="text">Harendra Prajapati</div>
                        <p>Java Developer</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/team1.jpeg" alt="">
                        <div class="text">Shubham Mishra</div>
                        <p> Android App Developer</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/rishabh.jpg" alt="">
                        <div class="text">Rishabh Yadav</div>
                        <p>python Developer </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/myprofile.jpg" alt="">
                        <div class="text">Harendra Prajapati</div>
                        <p>HTML,CSS Developer</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/team1.jpeg" alt="">
                        <div class="text">Shubham Mishra</div>
                        <p>HTML,CSS Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p class="" align="center"> 
                        <img align=center src="images/youtube1.gif" height="80" width="120">
                        <a href="https://www.youtube.com/channel/UC5H_q2PTvvdid3TpGxcw1ZQ">STUDY HUB TUTORIAL</a><br> </p>
                        <img align=center src="images/linkedin.gif" height="80" width="90">
                        <a \n href="https://in.linkedin.com/in/harendra-prajapati-0a1710185?trk=people-guest_people_search-card">HARENDRA PRAJAPATI</a><br>
                        <img align=center src="images/github.gif" height="80" width="90">
                       <a \n href="https://github.com/hellooharendra">Harendraprajapati72</a><br><br>
                       
                        
                    
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Harendra Prajapati</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Lucknow Uttar Pradesh</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">tutorialstudyhub@gmail.com</div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                   <form action="" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="field">
                            <input type="number" name="contact" placeholder="Contact Number" required>
                        </div>
                        
                        <div class="field textarea">
                            <textarea name="message" cols="30" rows="10" placeholder="Message.." required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit" name="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="home">
    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=25%20a%20dak%20tar%20awas%20colony%20matiyari%20chinhut%20lucknow%20lucknow%20uttar%20pradesh&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net">custom google maps for website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://github.com/hellooharendra">Harendra Prajapati</a> | <span class="far fa-copyright"></span> 2021 All rights reserved.</span>
    </footer>

 <script src="script.js"></script>




 <!-- loader start -->
 <Script>
    var loader= document.getElementById("preloader");
    window.addEventListener("load",function(){
        loader.style.display="none";

    })
 </Script>

<!-- loader end -->
</body>



</html>
