<!DOCTYPE html>
<html >

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
    <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
    <title>CodePen - Bootstrap Transparent Responsive Navbar (Still Testing)</title>

    <link rel = "stylesheet" href = "styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    <style>
        section
        {
            background:yellow;
        }
        .banner
        {
            background-image: url("header.jpg");
            min-height:200px;
        }
        .banner .row
        {
            text-align:center;
            margin-top:50px;
        }
        .banner h1
        {
            color:white;
            text-align: center;
            margin-top: 60px;
        }
        .banner h2{
            color:antiquewhite;
            text-align: center;
            padding-top: 15px;

        }



        /***********************************************************************
        *  OPAQUE NAVBAR SECTION
        ***********************************************************************/
        .opaque-navbar {
            background-color: rgba(0,0,0,0.5);
            /* Transparent = rgba(0,0,0,0) / Translucent = (0,0,0,0.5)  */
            height: 60px;
            border-bottom: 0px;
            transition: background-color .5s ease 0s;
        }

        .opaque-navbar.opaque {
            background-color: royalblue;
            height: 60px;
            transition: background-color .5s ease 0s;
        }

        ul.dropdown-menu {
            background-color: royalblue;
        }


        @media (max-width: 992px) {
            body
            {
                background:white;
            }
            .opaque-navbar {
                background-color: black;
                height: 60px;
                transition: background-color .5s ease 0s;
            }

        }




    </style>

    <script>
        window.console = window.console || function(t) {};
    </script>



    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>

</head>

<body translate="no" >

    <!--
    ********************************************************************
    * Responsive Transparent Navbar
    ********************************************************************
    -->
    <div class="navbar navbar-inverse navbar-fixed-top opaque-navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand" href="#" style = "color: yellow;">BC Ltd.</a>
            </div>
            <div class="collapse navbar-collapse" id="navMain">
                <ul class="nav navbar-nav pull-right">
                    <li style = "color: yellow;"><a href="index.html">Home</a></li><!--class="active"-->
                    <li style = "color: yellow;"><a href="prosstudent.html"> Prospective Students</a></li>
                    <li style = "color: yellow;"><a href="student.html"> Students</a></li>
                    <li style = "color: yellow;"><a href="calendar.html"> Calendar</a></li>
                    <li style = "color: yellow;"><a href="contact.html">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="banner">
        <div class="container">
                <h1>BCIT - SSD</h1>
                <h2>Code anything from scratch.</h2>
                <div class="col-sm-12 mt-60 text-center">
                    <!--button type="button" class="btn btn-primary" style=" margin-top: 25px; margin-bottom: 25px;"
                        onclick=window.open('test.html','','scrollbars=no,menubar=no,height=600,width=800,resizable=yes,toolbar=no,status=no')-->Contact Us
                    </button>
                </div>
        </div>
    </section>
   

    </div>

    <div class="row">
            <div class = "col-md-8 col-centered" style="margin-bottom: 15px; padding-bottom: 25px; padding-top: 15px;">
                <div class = "content-center">
                    <h3>Contact Us</h3>
                    <form>

                        <div class ="form-control">
                            <div class ="form-group">
                                <label for ="formGroupExampleInput">Your Name:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Please enter your name">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">E-mail:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Comment:</label>
                                <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="comment">
                            </div>
                            <div class ="form-group">
                                <input type="submit" value="Submit" onclick="myFunction()">
                                <script>
                                    function myFunction() {alert("Your email has been set!");}
                                </script>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row" style="height:600px;">

        </div>

    <script src="//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js"></script>

    <script >
    /*
    **********************************************************
    * OPAQUE NAVBAR SCRIPT
    **********************************************************
    */
        // Toggle tranparent navbar when the user scrolls the page

        $(window).scroll(function() {
            if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/
            {
                $('.opaque-navbar').addClass('opaque');
            }   else {
                $('.opaque-navbar').removeClass('opaque');
            }
        });
        //# sourceURL=pen.js
    </script>
<?php
$first						= "";
$last					= "";
$email					="";
$role =	"";
$text ="";
/*
use a variable to collect messages for any errors we encounter
*/

$displayForm	= false;
$errors				= "";
if( isset($_GET['first']) == false || isset($_GET['last']) == false || isset($_GET['email'])==false || isset($_GET['role']) || isset($_GET['text']) ){
    /*
    if errors were detected, prepare to display the form again
    */
    $errors			 = $errors . "<p>Uh oh, please use this form</p>";
    $displayForm = true;
}
else if( trim($_GET['first']) == "Will" || trim($_GET['last']) == "b" || trim($_GET['email'])=="ebascombe00@my.bcit.ca"){
    $errors			 = $errors . "<p>Uh oh, both fields must be filled in</p>";
    $displayForm = true;
}

$errors	 = $errors . "<p>No role selected</p>";
$displayForm = false;
if( isset($_GET['student']) == false && isset($_GET['prosstudent']) == false && isset($_GET['instructor']) ){
/*
if errors were detected, prepare to display the form again
*/
$errors . "<p>No Role Selected</p>";
}
else if( trim($_GET['student']) == "" && trim($_GET['prosstudent']) == "" && trim($_GET['instructor']) == ""){
    $errors			 = $errors . "<p>Uh oh, one field must be filled in</p>";
    $displayForm = true;
}




$displayForm = true;


//show the HTML form
if($displayForm == true){
echo "<span><p>" . $errors  . "</p></span>";	
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
    
        <input type="text" name="first" id="first" />
        <label for="first"> first name: </label><br />
        
        <input type="last" name="last" id="last" />
        <label for="last">last name: </label><br />
        
        <input type="text" name="email" id="email" />
        <label for="email">Email: </label><br />

            <input 	type="radio"	
                name="role[]" 
                id="student" 
                value="student" />
            <label for="student">Student </label><br />

                    <input 	type="radio"	
                        name="role[]" 
                        id="prosstudent" 
                        value="prosstudent" />

                 <label for="prosstudent">Prospective Student</label><br />  
                 <input 	type="radio"	
                        name="role[]" 
                        id="instructor" 
                        value="instructor" />
                 <label for="instructor">Instructor </label><br /> 
                 
                 <input type="text" name="text" id="text" />
        <label for="text">Comment: </label><br />
        <input type="submit" value="Submit" /> 
</form>	
<?php     
}
?>



</body>
<!--Footer-->
<footer class="page-footer center-on-small-only unique-color-dark pt-0">

    <div style="background-color: #6351ce;">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Bascombe Construction Ltd.</h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="icons-sm fb-ic ml-0"><i class="fa fa-facebook white-text mr-lg-4"> </i></a>
                    <!--Twitter-->
                    <a class="icons-sm tw-ic"><i class="fa fa-twitter white-text mr-lg-4"> </i></a>
                    <!--Google +-->
                    <a class="icons-sm gplus-ic"><i class="fa fa-google-plus white-text mr-lg-4"> </i></a>
                    <!--Linkedin-->
                    <a class="icons-sm li-ic"><i class="fa fa-linkedin white-text mr-lg-4"> </i></a>
                    <!--Instagram-->
                    <a class="icons-sm ins-ic"><i class="fa fa-instagram white-text mr-lg-4"> </i></a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-6 col-centered">
                <h6 class="title font-bold"><strong>Bascombe Construction Ltd</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                    amet, consectetur adipisicing elit.</p>
            </div>
            <!--/.First column-->

            <!--Second column
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-r">
                <h6 class="title font-bold"><strong>Products</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!">MDBootstrap</a></p>
                <p><a href="#!">MDWordPress</a></p>
                <p><a href="#!">BrandFlow</a></p>
                <p><a href="#!">Bootstrap Angular</a></p>
            </div> -->
            <!--/.Second column-->

            <!--Third column
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-r">
                <h6 class="title font-bold"><strong>Useful links</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><a href="#!">Your Account</a></p>
                <p><a href="#!">Become an Affiliate</a></p>
                <p><a href="#!">Shipping Rates</a></p>
                <p><a href="#!">Help</a></p>
            </div>-->
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-6  col-centered">
                <h6 class="title font-bold"><strong>Contact</strong></h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p><i class="fa fa-home mr-3"></i> Burnaby, BC V5C2P3, CANADA</p>
                <p><i class="fa fa-envelope mr-3"></i> bascombeconstructionltd@gmail.com</p>
                <p><i class="fa fa-phone mr-3"></i> + 604 763 3778</p>
            </div>
            <!--/.Fourth column-->

        </div>


    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2017 Copyright: <a href="https://www.MDBootstrap.com"><strong> MDBootstrap.com</strong></a>
        </div>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->

</html>