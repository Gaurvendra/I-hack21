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
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css" />
    <link rel="stylesheet" href="vendor/animate.css/animate.css" />
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="vendor/toastr/toastr.min.css" />

    <!-- App styles -->
    <link rel="icon" type="image/png" sizes="16x16" href="p/images/favicon/favicon-16x16.png">
    <link rel="stylesheet" href="styles/pe-icons/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="styles/pe-icons/helper.css" />
    <link rel="stylesheet" href="styles/stroke-icons/style.css" />
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
session_start();
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
                        <li class="active">
                            <a href="leaderboard.php">Leaderboard</a>
                        </li>
                        <li>
                            <a href="rules.html">Rules</a>
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
                                    <h3 class="m-b-xs">LeaderBoard</h3>
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
                                <div class="panel-heading">

                                    Scoreboard
                                </div>
                                <div class="panel-body">

                                    <table class="table table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Level</th>
                                                <th>Score</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                    require 'includes/protected/config.php';
                                    $que1 = mysql_query("SELECT * FROM users ORDER BY score DESC LIMIT 20");
    $i =1;
                          while ($row = mysql_fetch_array($que1)) {
                              
                              ?>
                                            <tr>
                                                <td>&nbsp;<?php echo $i; ?></td>
                                                <td>&nbsp;<?php echo $row['name']; ?></td>
                                                <td>&nbsp;<?php echo $row['email']; ?></td>
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

        <script>
            $(document).ready(function() {


                // Sparkline charts
                var sparklineCharts = function() {
                    $(".sparkline").sparkline([20, 34, 43, 43, 35, 44, 32, 44, 52, 45], {
                        type: 'line',
                        lineColor: '#FFFFFF',
                        lineWidth: 3,
                        fillColor: '#43454D',
                        height: 47,
                        width: '100%'
                    });

                    $(".sparkline7").sparkline([10, 34, 13, 33, 35, 24, 32, 24, 52, 35], {
                        type: 'line',
                        lineColor: '#FFFFFF',
                        lineWidth: 3,
                        fillColor: '#f7af3e',
                        height: 75,
                        width: '100%'
                    });

                    $(".sparkline1").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5, 1, 6, 7, 15, 6, 4, 0], {
                        type: 'line',
                        lineColor: '#2978BB',
                        lineWidth: 3,
                        fillColor: '#2978BB',
                        height: 170,
                        width: '100%'
                    });

                    $(".sparkline3").sparkline([-8, 2, 4, 3, 5, 4, 3, 5, 5, 6, 3, 9, 7, 3, 5, 6, 9, 5, 6, 7, 2, 3, 9, 6, 6, 7, 8, 10, 15, 16, 17, 15], {

                        type: 'line',
                        lineColor: '#fff',
                        lineWidth: 3,
                        fillColor: '#43454D',
                        height: 60,
                        width: '100%'
                    });

                    $(".sparkline5").sparkline([0, 6, 8, 3, 2, 4, 3, 4, 9, 5, 3, 4, 4, 5], {
                        type: 'line',
                        lineColor: '#f7af3e',
                        lineWidth: 2,
                        fillColor: '#2F323B',
                        height: 20,
                        width: '100%'
                    });
                    $(".sparkline6").sparkline([0, 1, 4, 2, 2, 4, 1, 4, 3, 2, 3, 4, 4, 2, 4, 2, 1, 3], {
                        type: 'bar',
                        barColor: '#f7af3e',
                        height: 20,
                        width: '100%'
                    });

                    $(".sparkline8").sparkline([4, 2], {
                        type: 'pie',
                        sliceColors: ['#f7af3e', '#404652']
                    });
                    $(".sparkline9").sparkline([3, 2], {
                        type: 'pie',
                        sliceColors: ['#f7af3e', '#404652']
                    });
                    $(".sparkline10").sparkline([4, 1], {
                        type: 'pie',
                        sliceColors: ['#f7af3e', '#404652']
                    });
                    $(".sparkline11").sparkline([1, 3], {
                        type: 'pie',
                        sliceColors: ['#f7af3e', '#404652']
                    });
                    $(".sparkline12").sparkline([3, 5], {
                        type: 'pie',
                        sliceColors: ['#f7af3e', '#404652']
                    });
                    $(".sparkline13").sparkline([6, 2], {
                        type: 'pie',
                        sliceColors: ['#f7af3e', '#404652']
                    });
                };

                var sparkResize;

                // Resize sparkline charts on window resize
                $(window).resize(function() {
                    clearTimeout(sparkResize);
                    sparkResize = setTimeout(sparklineCharts, 100);
                });

                // Run sparkline
                sparklineCharts();


                // Flot charts data and options
                var data1 = [
                    [0, 16],
                    [1, 24],
                    [2, 11],
                    [3, 7],
                    [4, 10],
                    [5, 15],
                    [6, 24],
                    [7, 30]
                ];
                var data2 = [
                    [0, 26],
                    [1, 44],
                    [2, 31],
                    [3, 27],
                    [4, 36],
                    [5, 46],
                    [6, 56],
                    [7, 66]
                ];

                var chartUsersOptions = {
                    series: {
                        splines: {
                            show: true,
                            tension: 0.4,
                            lineWidth: 1,
                            fill: 1

                        }

                    },
                    grid: {
                        tickColor: "#404652",
                        borderWidth: 0,
                        borderColor: '#404652',
                        color: '#404652'
                    },
                    colors: ["#f7af3e", "#DE9536"]
                };

                $.plot($("#flot-line-chart"), [data2, data1], chartUsersOptions);


                // Run toastr notification with Welcome message
                setTimeout(function() {
                    toastr.options = {
                        "positionClass": "toast-top-right",
                        "closeButton": true,
                        "progressBar": true,
                        "showEasing": "swing",
                        "timeOut": "6000"
                    };
                    toastr.warning('<strong>You entered to I-hack</strong> <br/><small>An online event by upescsi.in. </small>');
                }, 1600)


            });

        </script>

</body>


</html>
