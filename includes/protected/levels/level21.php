<?php

$img ="assets/img/221.png";
$question = "What is the time??";
$level = 2;
$comment = "<!--Part1:-  eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9     -->";
// $comment1 = "<!-- assets/img/UFvPFxRgSzusXp6YCD.jpg -->";
// $comment2 = "<!-- JWT  -->";
// $comment3 = "<!--   -->";
?>
    

    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="view-header">
                        <div class="pull-right text-right" style="line-height: 14px">
                            <h3>level<br><strong><span class="c-white"><?php echo $level ?></span></strong> </h3>
                        </div>
                        <div class="header-icon">
                            <i class="fa fa-user"></i>
                            <?php echo $comment; ?> 
                        </div>
                        <div class="header-title">
                            <h3 class="m-b-xs"><?php echo $_SESSION['name']?></h3>
                            <small>
                            </small>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row">
            <div class="col-6">

<div class="panel panel-c-white">
    <div class="panel-heading">
    </div>
                       <div class="panel-body">
                            <p>

<img src="<?php echo $img; ?>" width="300" height="300" >
<p> </div>
    <div class="panel-footer"></div>
</div>

</div>
                <div class="col-6">
                  <div class="p-3">
                    <br>
                    <?php echo $comment2; ?> 
                    <br><br>
                    <center><p><?php echo $question;?></p></center>
                    <div class="form-group">
                      <form id="level" action="response.php" method="post">
                        <input class="form-control form-control-lg" type="text" name="solution" placeholder=""><br>
                        <center><button form="level" type="submit" class="btn btn-outline-success">Success</button></center>
                      </form>
                        </div>
                    </div>
                  
                </div>
                </div>
       
        </div>
    </section>
    <!-- End main content-->
<script>var _0x58a5=['668905hLPMpQ','1WTBeyU','929586AFUpeH','Part3:-\x20eyJzdWIiOiIxMjM0NTY3ODkwIiwidGltZSI6Ijk6MTIiLCJpYXQiOjE1MTYyMzkwMjJ9','log','587788sYejRs','2aUlSdq','529520LYVZEY','33bGIIUM','21703jASXCC','723890TknReO','844514AwzzLQ'];function _0x2c2b(_0x35b699,_0x2d37fc){_0x35b699=_0x35b699-0x1bb;var _0x58a55b=_0x58a5[_0x35b699];return _0x58a55b;}(function(_0x1a8dae,_0x5ee3fc){var _0x2b704b=_0x2c2b;while(!![]){try{var _0x42aac8=-parseInt(_0x2b704b(0x1c6))*-parseInt(_0x2b704b(0x1c5))+parseInt(_0x2b704b(0x1be))*parseInt(_0x2b704b(0x1c2))+-parseInt(_0x2b704b(0x1bc))+-parseInt(_0x2b704b(0x1bf))+-parseInt(_0x2b704b(0x1bd))+parseInt(_0x2b704b(0x1c4))*parseInt(_0x2b704b(0x1c3))+parseInt(_0x2b704b(0x1bb));if(_0x42aac8===_0x5ee3fc)break;else _0x1a8dae['push'](_0x1a8dae['shift']());}catch(_0x4dd9ee){_0x1a8dae['push'](_0x1a8dae['shift']());}}}(_0x58a5,0x9d348));function hi(){var _0x5e24b3=_0x2c2b;console[_0x5e24b3(0x1c1)](_0x5e24b3(0x1c0));}hi();</script>

</div>
<!-- End wrapper-->
