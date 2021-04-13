<?php

$img ="assets/img/qqmq.jpg";
$question = "gli indizi non aiuteranno se non trovati!";
$level = 5;
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
            <div class="col-md-6">

                <div class="panel panel-c-white">
                    <div class="panel-heading">

                        <!-- Filled panel with custom color-->
                    </div>
                    <div class="panel-body">
                        <p>

                            <img src="<?php echo $img; ?>" width=100% height=auto>
                            <p>
                    </div>
                    <div class="panel-footer"></div>
                </div>

            </div>
           

            <div class="col-md-6">
                <div class="panel panel-filled">
                    <div class="panel-heading">

                        Question
                    </div>
                    <div class="panel-body">

                        <p><?php echo $question;?></p>

                        <form class="form-group" action="response.php" method="post">
                            <div class="form-group row"><label for="inputEmail3" class="col-sm-2 col-form-label">Solution</label>
                                <div class="col-sm-10"><input class="form-control" type="text" name="solution" placeholder=""></div>
                            </div>
                            <button class="btn btn-accent">Success</button>
                        </form>
                    </div>
                </div>
               
            </div>
        </div>

    </div>
</section>

</div>
<!-- End wrapper-->
      
