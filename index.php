<?php
session_start();
if (isset($_SESSION['email'])) {
    

    header('location:./dashboard.php');
} 
require 'includes/protected/config.php';
$result = mysql_query("SELECT COUNT(name) FROM users");
$que = mysql_query("SELECT * FROM users ORDER BY score DESC LIMIT 1");
$top = mysql_fetch_array($que);
$users = mysql_fetch_array($result);
$que1 = mysql_query("SELECT * FROM users ORDER BY score DESC LIMIT 20");
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>i-hack</title>

    <!-- Vendor styles -->
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css"/>
    <link rel="stylesheet" href="vendor/animate.css/animate.css"/>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>
<link rel="icon" type="image/png" sizes="16x16" href="p/images/favicon/favicon.ico">
    <!-- App styles -->
    <link rel="stylesheet" href="styles/pe-icons/pe-icon-7-stroke.css"/>
    <link rel="stylesheet" href="styles/pe-icons/helper.css"/>
    <link rel="stylesheet" href="styles/stroke-icons/style.css"/>
    <link rel="stylesheet" href="styles/style.css">
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
                <span>v.5.0</span>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="left-nav-toggle">
                <a href="#">
                    <i class="stroke-hamburgermenu"></i>
                </a>
            </div>
           
        </div>
    </nav>
    <!-- End header-->

    <!-- Navigation-->
    <aside class="navigation">
        <nav>
            <ul class="nav luna-nav">
                <li class="nav-category">
                    Main
                </li>
                 <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><a href="http://www.upescsi.in/">About</a></li>

             
              
              
            </ul>
        </nav>
    </aside>
    <!-- End navigation-->


    <!-- Main content-->
    <section class="content">
        <div class="container-fluid">

            <div class="row m-t-sm">

                <div class="col-md-12">
                    <div class="panel panel-filled">

                        <div class="panel-body">

                            <div class="row">
                                <div class="col-md-6">
                                    <div>
                                        
                                        <h2 class="m-t-xs m-b-none">
                                           iHack 2021
                                        </h2>
                                        <small>
                                           ihack is a online cryptic hunt conducted for 24 hours by UPES-CSI. Participation will be done individually. Participants would have to search for clues spread over the webpages to pass through the various levels and score points accordingly.

The clues maybe hidden in the HTML source code or encrypted into a song or a picture. The person who clears most levels by the end of the 24-hour mark would be declared as a winner.
Bonus points would be awarded to participants if they can come up with an idea for a level. This bonus is only available after clearing the first stage.

As the event is online, participants will be provided with their unique id and passwords through email and their scores will be regularly updated with their id. Participants need to provide their valid email address so that the id and passwords can be easily availed to them.
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <table class="table small m-t-sm">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <strong class="c-white">Total Users</strong>
                                            </td>
                                            <td>
                                                <strong class="c-white">Top Scorer</strong> 
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <strong class="c-white"><?php echo $users[0] ?></strong> 
                                            </td>
                                            <td>
                                                <strong class="c-white"><?php echo $top['name']?></strong> 
                                            </td>
                                        </tr>
                                        
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-3 m-t-sm">
                                <span class="c-white">
                                   Enter to the gameroom
                                </span>
                                    <br>
                                    
                                    <div class="btn-group m-t-sm">
                                        <a href="login.php" class="btn btn-default btn-sm"><i class="fa fa-envelope"></i> Login</a>
                                      
                                    </div><div class="btn-group m-t-sm">
                                       
                                        <a href="register.php" class="btn btn-default btn-sm"><i class="fa fa-check"></i> Register</a>
                                    </div>


                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">

                <div class="col-md-6">

                    <div class="panel">
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

                                            <h2>#1</h2>

                                            <p>The game play involves getting to the next level by using any of the means of encryption and decryption. So keep yourself focussed and try to solve more and more questions in order to reach at the top.</p>
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

                                            <h2>#5</h2>

                                            <p>This rule could be a happy news for all, because we have not made any restriction on the number of trials or answers to be given for any particular questions.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="panel">

                        <div class="panel-body">
                           <h4>Leaderboard</h4>

                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th>Score</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                               <?php
    $i =1;
                          while ($row = mysql_fetch_array($que1)) {
                              
                              ?>
                            <tr>
                              <td>&nbsp;<?php echo $i; ?></td>
                              <td>&nbsp;<?php echo $row['name']; ?></td>
                              <td>&nbsp;<?php echo $row['level']; ?></td>
                              <td>&nbsp;<?php echo ($row['score'] + $row['bonus']); ?></td>
                            </tr>
                          <?php
                              $i=$i+1;
                          } ?>
                            </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

          
        </div>
    </section>
    <!-- End main content-->

</div>
<!-- End wrapper-->
    <footer class="footer">
  <div class="container">
    
      <p class="copyright text-center">
        © <span id="writeCopyrights"></span>
        Made by <span class="fa fa-bolt"></span><a href="http://www.upescsi.in/" target="_blank"> UPES-CSI</a>
      </p>
   
  </div>
</footer>

<!-- Vendor scripts -->
<script src="vendor/pacejs/pace.min.js"></script>
<script src="vendor/jquery/dist/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/flot/jquery.flot.min.js"></script>
<script src="vendor/flot/jquery.flot.resize.min.js"></script>
<script src="vendor/flot/jquery.flot.spline.js"></script>

<!-- App scripts -->
<script src="scripts/luna.js"></script>

<script>
    $(document).ready(function () {


        var data = [
            {
                data: [ [1, 4], [2, 5], [3, 7], [4, 4], [5, 8], [6, 9],[7, 11], [8, 10], [9, 8], [10, 5], [11, 4], [12, 3] ]
            }
        ];

        var chartUsersOptions2 = {
            series: {
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 2,
                    fill: false
                },
            },
            legend: {
                show: false
            },
            grid: {
                borderWidth: 0
            }
        };

        $.plot($("#flotProfile"), data, chartUsersOptions2);

    });
</script>

</body>



</html>
