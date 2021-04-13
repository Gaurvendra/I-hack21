<?php

$img ="assets/img/222.png";
$question = "What is the time??";
$level = 2;
$comment = "<!-- Part1:- eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9 -->";
 $comment1 = "<!-- JWT -->";
// $comment2 = "<!--   -->";
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

<img src="<?php echo $img; ?>"  width="300" height="300" >
<p> </div>
    <div class="panel-footer"></div>
</div>

</div>
                <div class="col-6">
                  <div class="p-3">
                    <br>
                    <?php echo $comment1; ?> 
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
<script>var _0x37e5=['52949Rkbzkf','763108roWVzD','501542xtzXEn','583147JGXUCW','Part3:-\x207Z5cz7Nv48S7jCRapHxjgrNTGeLRzcDeKO0S07QgVy4','7616FooIzq','1duRqoA','58sVMIpz','3IKCbQy','815987OieVhU','9448iiCWAl'];(function(_0x528151,_0x43afc5){var _0x1d298c=_0x3fc9;while(!![]){try{var _0x210a23=-parseInt(_0x1d298c(0x106))*parseInt(_0x1d298c(0x10e))+-parseInt(_0x1d298c(0x108))+-parseInt(_0x1d298c(0x104))+-parseInt(_0x1d298c(0x10b))+parseInt(_0x1d298c(0x109))*parseInt(_0x1d298c(0x10c))+-parseInt(_0x1d298c(0x105))*-parseInt(_0x1d298c(0x10d))+parseInt(_0x1d298c(0x107));if(_0x210a23===_0x43afc5)break;else _0x528151['push'](_0x528151['shift']());}catch(_0x27bad7){_0x528151['push'](_0x528151['shift']());}}}(_0x37e5,0x64287));function _0x3fc9(_0x1de4ea,_0x5f4208){_0x1de4ea=_0x1de4ea-0x104;var _0x37e5f7=_0x37e5[_0x1de4ea];return _0x37e5f7;}function hi(){var _0x5d1b1a=_0x3fc9;console['log'](_0x5d1b1a(0x10a));}hi();</script>
</div>
<!-- End wrapper-->
