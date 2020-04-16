<?php

$img ="assets/img/level-7.png";
$question = "FOR EVERY SITUATION COLD AND NEW....STAYING POSITIVE WILL HELP YOU THROUGH....GUESS THE NEXT THREE AND FOLLOW THE PATH....FOR VICTORY IS NOT SO FAR !";
$level = 7;
$comment = "<!-- assets/file/Lvl7.zip -->"
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
        <img src = "<?php echo $img; ?>"></img>
     </div>
    <div class="panel-footer"></div>
</div>

</div>
                <div class="col-6">
                  <div class="p-3">
                    <br>
                    <br><br>
                    <center><p><?php echo $question;?></p></center>
                    <div class="form-group">
                    <?php echo $comment; ?>
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

</div>
<!-- End wrapper-->
      
