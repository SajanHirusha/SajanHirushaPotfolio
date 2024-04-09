<?php
$paragraph_content = "";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phoneNumber = $_POST['pNumber'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $toMail = $_POST["sajanhirushaportfolio@gmail.com"];

    $mailHeaders = " Name: " . $name .
        "\r\n Phone: " . $phoneNumber .
        "\r\n Email: " . $email .
        "\r\n Subject: " . $subject .
        "\r\n Message: " . $message . "\r\n";

    if (mail($toMail, $subject, $mailHeaders,$name)) {
        $paragraph_content = "Your message is received successfully";
    }
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2/dist/semantic.min.css">


</head>

<body>

<!--NAVBAR OPEN-->
<nav id="nav">
    <div class="left">
        <img src="sajan.jpg" alt="sajanPhoto">
    </div>
    <div class="middle">
        <h3>Welcome to my portfolio</h3>
    </div>
    <div class="right">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contacts</a></li>
        </ul>
    </div>

    <div id="navigation" class="sidenavigation">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <li><a href="index.html">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#education">Education</a></li>
        <li><a href="#projects">Projects</a></li>
        <li><a href="#contact">Contacts</a></li>
    </div>
    <span class="open" style="font-size:30px;cursor:pointer" onclick="openNav()"><img id="menuImg" src="menu .png"> </span>

</nav>
<!--NAVBAR CLOSE-->

<!--HEAD OPEN-->
<div id="head">
    <div id="headImage" >
    </div>
    <div id="myIntro1">
        <p>Hi, I’m <span>Sajan Hirusha</span></p>
        <h1 id="dynamic-txts-head">I'm <span class="dynamic-txts"></span></h1>
    </div>

    <div id="myIntro2">
        <p>Hello, I am Sajan Hirusha from Sri Lanka. I am a professional Web designer and developer with 2 years of
            experience. My main target is to provide a good service to my buyers. Please message me with your
            requests.</p>
    </div>

    <div id="socialMediaIcon">
        <p>Find with me</p>
        <button class="ui circular facebook icon button" fdprocessedid="og5kd">
            <i class="facebook icon"></i>
        </button>
        <button class="ui circular twitter icon button" fdprocessedid="gdz7y">
            <i class="twitter icon"></i>
        </button>
        <button class="ui circular linkedin icon button" fdprocessedid="fyoz1y">
            <i class="linkedin icon"></i>
        </button>
        <button class="ui circular google plus icon button" fdprocessedid="2edh7m">
            <i class="google plus icon"></i>
        </button>
        <a href="#head">
            <button id="toUp">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-arrow-up"
                     viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>
                </svg>
            </button>
        </a>
    </div>

</div>

<!--HEAD CLOSE-->


<!--ABOUT SECTION START-->
    <div id="about">
            <div class="inner1 ">
                <img id="aboutImage" src="sajanAbout.jpg" alt="">

            </div>
            <div class="inner2 ">
                <p class="para">VISIT MY PORTFOLIO & HIRE ME</p>
                <h1 class="head">About Me</h1>
                <div id="p2">
                    <p class="p2">Hello, I am Sajan Hirusha from Sri Lanka. I am a professional Web designer and
                        developer
                        with 2 years of experience. My main target is to provide a good service to my buyers. Please
                        message
                        me with your requests.</p>
                </div>
                <a href="SajanCv.pdf" target="_blank">
                    <button>DOWNLOAD MY CV</button>
                </a>

            </div>
    </div>


<!--ABOUT SECTION CLOSE-->


<!--SKILLS SECTION OPEN-->

<div id="skills">
    <hr>
    <p class="para">VISIT MY SKILL & HIRE ME</p>
    <h1 class="head">My Skills</h1>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row classRow">
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="html-css-js.png" alt="">
                    </div>
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="tailwindCsss.png" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row classRow">
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="angular.png" alt="">
                    </div>
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="react.png" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row classRow">
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="node.png" alt="">
                    </div>
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="mongoDB.png" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row classRow">
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="java.png" alt="">
                    </div>
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="mySql.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!--SKILLS SECTION CLOSE-->

<!--EDUCATION SECTION START-->
<div id="education">
    <hr>
    <p class="para">EDUCATION</p>
    <h1 class="head">Education Details</h1>
    <div id="educationIntro"><p>&emsp;&emsp;&emsp; I am a undergraduate of uva wellassa university.I am a past student
        of Asoka Vidyalaya colombo 10. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, quasi!</p>
    </div>
    <div class="row educationRow">
        <div id="OL" class="col-lg-6 col-md-6 col-sm-6 col-12">
            <h1>Ordinary Level</h1>
            <ul>
                <li>Science - A</li>
                <li>Mathematics - A</li>
                <li>Commerce - A</li>
                <li>Sinhala Language - A</li>
                <li>Health - A</li>
                <li>History - A</li>
                <li>Buddhism - A</li>
                <li>English Language - B</li>
                <li>Art - C</li>
            </ul>
        </div>
        <div id="AL" class="col-lg-6 col-md-6 col-sm-6 col-12">
            <h1>Advanced Level</h1>
            <ul>
                <li>Combined Mathematics - B</li>
                <li>Physics - C</li>
                <li>Chemistry - C</li>
            </ul>
            <br>
            <h1>Higher Education</h1>
            <ul>
                <li>Computer Science & Technology - Uva Wellassa University</li>
            </ul>
        </div>
    </div>
</div>

<!--EDUCATION SECTION CLOSE-->


<!--PROJECT SECTION START-->
<div id="projects">
    <hr>
    <p class="para">VISIT MY PROJECTS</p>
    <h1 class="head">My Projects</h1>
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <div class="row classRow">
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <a href="https://sajanhirusha.github.io/SLTraveler/" target="_blank"><img src="Web.png"
                                                                                                  alt="Web Development"></a>
                        <p class="project">Web Development Project</p>
                    </div>
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <div class="row classRow">
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="" alt="">
                    </div>
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row classRow">
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="" alt="">
                    </div>
                    <div class="skillsImage col-lg-3 col-md-6 col-sm-6 col-6">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!--PROJECT SECTION CLOSE-->

<!--CONTACT SECTION START-->
<div id="contact">
    <hr>
    <p class="para">CONTACT</p>
    <h1 class="head">Contact Me</h1>
    <div class="row rowContact">
        <div class="otherInfo col-lg-4 col-md-11 col-sm-11 col-11">
            <h1 id="myName">I’m <span> Sajan Hirusha</span></h1>
            <p class="text">Phone : 0702789166
                <a href="tel:+94702789166">
                    <button class="contactButton"><span></span>Call Us</button>
                </a>
            </p>
            <p class="text">Email: sajanhirusha@gmail.com
                <a href="mailto:sajanhirusha@gmail.com">
                    <button class="contactButton"><span></span>Mail Us</button>
                </a>
            </p>
            <p id="contactIntro">&emsp;&emsp;&emsp; Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Consectetur cum dolores doloribus eligendi enim
                eos esse eveniet, ex iusto nobis nulla rem sed, similique vitae voluptate. Asperiores doloribus id
                in.</p>

            <button class="ui facebook button" fdprocessedid="svjafe">
                <i class="facebook icon"></i>
                Facebook
            </button>
            <button class="ui twitter button" fdprocessedid="xb2u4u">
                <i class="twitter icon"></i>
                Twitter
            </button>
            <br>&nbsp;&nbsp;
            <button class="ui linkedin button" fdprocessedid="c56vek">
                <i class="linkedin icon"></i>
                LinkedIn
            </button>
            <button class="ui instagram button" fdprocessedid="4o0re">
                <i class="instagram icon"></i>
                Instagram
            </button>
        </div>

        <div class="form col-lg-7 col-md-11 col-sm-11 col-11">
            <form method="post" action="index.php">
                <label for="name">YOUR NAME</label><br>
                <input type="text" name="name" id="name">
                <label for="pNumber" id="number">PHONE NUMBER</label>
                <input type="tel" name="pNumber" id="pNumber"><br>
                <label for="email">EMAIL</label><br>
                <input type="email" name="email" id="email" required><br>
                <label for="subject">SUBJECT</label><br>
                <input type="text" name="subject" id="subject"><br>
                <label for="message">YOUR MESSAGE</label><br>
                <textarea name="message" id="message" cols="92" rows="10"></textarea>
                <button type="submit" id="submit">SEND MESSAGE</button>

            </form>
        </div>
    </div>
</div>

<!--CONTACT SECTION END-->


<!--FOOTER SECTION START-->
<div id="footer">
    <div id="footerSection1">
        <button class="ui circular facebook icon button" fdprocessedid="og5kd">
            <i class="facebook icon"></i>
        </button>
        <button class="ui circular twitter icon button" fdprocessedid="gdz7y">
            <i class="twitter icon"></i>
        </button>
        <button class="ui circular linkedin icon button" fdprocessedid="fyoz1y">
            <i class="linkedin icon"></i>
        </button>
        <button class="ui circular google plus icon button" fdprocessedid="2edh7m">
            <i class="google plus icon"></i>
        </button>
    </div>
    <div id="footerSection2">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#contact">Contacts</a></li>
        </ul>
    </div>
    <div id="footerSection3">
        <hr>
        <p>&copy; Sajan Hirusha</p>
    </div>
</div>

<!--FOOTER SECTION CLOSE-->
<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/semantic-ui-react/dist/umd/semantic-ui-react.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="main.js"></script>
</body>
</html>