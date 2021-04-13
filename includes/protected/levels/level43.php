<?php

$img ="assets/img/sunny.png";
$question = "Can you guess the secret code ??";
$level = 4;
//$comment1 = "<!-- bandit.labs.overthewire.org -->";
$comment2 = "<!-- 2220 -->";
$comment3 = "<!-- bandit0 -->";
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
                              <?php echo $comment2; ?> 
                    </div>
                    <hr>
                </div>
            </div>
            <div class="row">
 <div class="col-md-6">

                    <div class="panel panel-c-white">
                        <div class="panel-heading">
                           
                          
                        </div>
                        <div class="panel-body">
                            <p>

<img src="<?php echo $img; ?>"  width=100% height=auto>
<p> </div>
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
                     
                    <?php echo $comment3; ?> 
                  
                </div>
                </div>
       
        </div>
    </section>

    <!-- End main content-->
<script>var _0x5126=['1817jdiUpF','8DOQqBE','1yzdhtq','344523tWFeta','1174341nvYSgd','83BUfmqz','5011QwJHGO','481826gbgBji','61482uCLqrt','310sMSdrX','60710tXkvBH','log'];function _0x11ae(_0x12314a,_0x2e97b4){_0x12314a=_0x12314a-0x130;var _0x51269a=_0x5126[_0x12314a];return _0x51269a;}(function(_0x1f3454,_0x1df45f){var _0xf5472c=_0x11ae;while(!![]){try{var _0x3a129c=-parseInt(_0xf5472c(0x136))+parseInt(_0xf5472c(0x13a))*-parseInt(_0xf5472c(0x137))+parseInt(_0xf5472c(0x131))+-parseInt(_0xf5472c(0x133))*-parseInt(_0xf5472c(0x134))+-parseInt(_0xf5472c(0x138))*parseInt(_0xf5472c(0x13b))+parseInt(_0xf5472c(0x130))*-parseInt(_0xf5472c(0x135))+parseInt(_0xf5472c(0x132));if(_0x3a129c===_0x1df45f)break;else _0x1f3454['push'](_0x1f3454['shift']());}catch(_0xfee543){_0x1f3454['push'](_0x1f3454['shift']());}}}(_0x5126,0x539f7));function hi(){var _0x3dd686=_0x11ae;console[_0x3dd686(0x139)]('bandit.labs.overthewire.org');}hi();</script>
</div>
<!-- End wrapper-->
      
