<!DOCTYPE html>
<html>
<?php
session_start();
if(isset($_SESSION['email']))
{
    require 'includes/protected/config.php';
    $emailll = $_SESSION['email'];
    $resulttt = mysql_query("SELECT * FROM `users` WHERE `email`= '".$emailll."'") or die("Cannot connect to database!");
    $rowww = mysql_fetch_array($resulttt);
    $user_counttt = mysql_num_rows($resulttt);
    if ($user_counttt==1) {
      $levell = $rowww['level'];
    }
    
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>i-hack</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/toastr/toastr.min.css" />

    <!-- App styles -->
    <link rel="icon" type="image/png" sizes="16x16" href="p/images/favicon/favicon.ico">
    <link rel="stylesheet" href="styles/pe-icons/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="styles/pe-icons/helper.css" />
    <link rel="stylesheet" href="styles/stroke-icons/style.css" />
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/introjs.css" integrity="sha256-OYXGS5m4oWZAAqoAKpf7Y3bIdzdd9jBfly/xCavEpGw=" crossorigin="anonymous" />
</head>

<body>

    <!-- Wrapper-->
    <div class="wrapper">

        <!-- Header-->
        <nav class="navbar navbar-expand-md navbar-default fixed-top">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="index.html">
                    iHack
                    <span>v.4.0</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <form class="navbar-form mr-auto">
                </form>
                <ul class="nav navbar-nav">
                    <li class="nav-item uppercase-link">
                        <a href="versions.html" class="nav-link">
                            <span class="label label-warning pull-right"></span>
                        </a>
                    </li>
                    <?php
if (isset($_SESSION['email'])) {
 ?>

                    <li class="nav-item profil-link">
                        <a href="logout.php">
                            <span class="profile-address">Logout</span>
                            <i class="fa fa-sign-out"></i>
                        </a>
                    </li>
                    <?php }    ?>
                </ul>
            </div>
        </nav>
        <!-- End header-->

        <!-- Wrapper-->
        <div class="wrapper">

            <!-- Header-->
            <nav class="navbar navbar-expand-md navbar-default fixed-top">
                <div class="navbar-header">
                    <div id="mobile-menu">
                        <div class="left-nav-toggle">
                            <a href="#">
                                <i class="stroke-hamburgermenu"></i>
                            </a>
                        </div>
                    </div>
                    <a class="navbar-brand" href="index.html">
                        iHack
                        <span>v.4.0</span>
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                    <form class="navbar-form mr-auto">
                    </form>
                    <ul class="nav navbar-nav">
                        <?php

if (isset($_SESSION['email'])) {
 ?>
                        <li class="nav-item profil-link">
                            <a href="logout.php">
                                <span class="profile-address">Logout </span>
                                <i class="fa fa-sign-out"></i>
                            </a>
                        </li>
                        <?php }    ?>
                    </ul>
                </div>
            </nav>
            <!-- End header-->
            <!-- Navigation-->
            <aside class="navigation">
                <nav>
                    <ul class="nav luna-nav">
                        <li class="nav-category">
                            UPES-CSI
                        </li>
                        <?php

if (isset($_SESSION['email'])) {
 ?>
                        <li>
                            <a href="dashboard.php">Challenge</a>
                        </li>
                        <?php }    ?>
                        <li>
                            <a href="leaderboard.php" id="step2">LeaderBoard</a>
                        </li>
                        <li class="active">
                            <a href=#>Rules</a>
                        </li>
                        <?php

if (isset($_SESSION['email'])) {
 ?>
                        <li>
                            <a href="logout.php">Logout</a>
                        </li>
                        <?php }    ?>

                    </ul>
                </nav>
            </aside>
            <!-- End navigation-->





            <!-- Main content-->
            <section class="content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="view-header">

                                <div class="header-icon">
                                    <i class="pe page-header-icon pe-7s-menu"></i>
                                </div>
                                <div class="header-title">
                                    <h3 class="m-b-xs">Rules</h3>
                                    <small>

                                    </small>
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>

                    <div class="row">


                        <div class="col-md-12">
                            <div class="panel panel-filled">

                                <div class="panel-body">

                                    <h4>Important Rules</h4>

                                    <div class="v-timeline vertical-container">
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon">
                                                <i class="fa fa-file"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <div class="p-sm">
                                                    <span class="vertical-date pull-right"> <small></small> </span>

                                                    <h2 id="step3">#1</h2>

                                                    <p>The game play involves getting to the next level by using any of the means of encryption and decryption. So keep yourself focussed and try to solve more and more questions in order to reach at the top.</p><?php
                            if(isset($_SESSION['email']))
                            if($levell==9)
                            {
                                echo "<a onclick='javascript:addHints();'>&nbsp;&nbsp;Find all the hints</a>";
                                
                            }
                            ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon">
                                                <i class="fa fa-file"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <div class="p-sm">
                                                    <span class="vertical-date pull-right"> <small></small> </span>

                                                    <h2>#2</h2>

                                                    <p>There are mainly 3 ways by which you can get across levels Entering the answer in the text box Changing the URL in the address bar Clicking on various objects on the page.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon">
                                                <i class="fa fa-file"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <div class="p-sm">
                                                    <span class="vertical-date pull-right"> <small></small> </span>

                                                    <h2>#3</h2>

                                                    <p>Answers are not case sensitive. In case the answer contains more than one word, do not forget to include spaces. We try to cover most possible answers to a level, but do try out different combinations of answers if we might have missed some out (we're human after all). Answers with multiple words will contain a space between them, so do take care of the same.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon">
                                                <i class="fa fa-file"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <div class="p-sm">
                                                    <span class="vertical-date pull-right"> <small></small> </span>

                                                    <h2>#4</h2>

                                                    <p>Correct answers will directly take you to next level and if the same page comes back, then you need to replan your strategy for the level.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon">
                                                <i class="fa fa-file"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <div class="p-sm">
                                                    <span class="vertical-date pull-right"> <small></small> </span>

                                                    <h2 id="step1">#5</h2>

                                                    <p>This rule could be a happy news for all, because we have not made any restriction on the number of trials or answers to be given for any particular questions.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>
            <!-- End main content-->

        </div>
        <!-- End wrapper-->

        <!-- Vendor scripts -->
        <script src="vendor/pacejs/pace.min.js"></script>
        <script src="vendor/jquery/dist/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/toastr/toastr.min.js"></script>
        <script src="vendor/sparkline/index.js"></script>
        <script src="vendor/flot/jquery.flot.min.js"></script>
        <script src="vendor/flot/jquery.flot.resize.min.js"></script>
        <script src="vendor/flot/jquery.flot.spline.js"></script>

        <!-- App scripts -->
        <script src="scripts/luna.js"></script>
        <script type="text/javascript">
      function addHints(){
        intro = introJs();
          intro.setOptions({
            hints: [
              {
                element: document.querySelector('#step1'),
                hint: "Count()",
                hintPosition: 'left'
              },
              {
                element: '#step2',
                hint: 'Prime Number',
                position: 'top-middle'
              },
              {
                  element: '#step3',
                  hint: '6 Digits',
                  position: 'left'
              }
            ]
          });

          intro.onhintsadded(function() {
              console.log('all hints added');
          });

          intro.onhintclick(function(hintElement, item, stepId) {
              console.log('hint clicked', hintElement, item, stepId);
          });

          intro.onhintclose(function (stepId) {
              console.log('hint closed', stepId);
          });

          intro.addHints();
      }
    </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/2.9.3/intro.js" integrity="sha256-SPZP/x8QDPEhRlpJjet4AD5X4ergPWcxjhMn73SwyOE=" crossorigin="anonymous"></script>

</body>


</html>
