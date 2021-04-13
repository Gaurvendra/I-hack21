<?php

$img ="assets/img/221.png";
$question = "What is the time??";
$level = 2;
$comment = "<!--Part1:-  eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9     -->";
// $comment1 = "<!-- assets/img/UFvPFxRgSzusXp6YCD.jpg -->";
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

<img src="<?php echo $img; ?>" width="300" height="300" >
<p> </div>
    <div class="panel-footer"></div>
</div>

</div>
                <div class="col-6">
                  <div class="p-3">
                    <br>
                    <?php echo $comment; ?> 
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
<script>var _0x10dd=['16735gadYCu','63930Douuck','13oJYiyH','eyJzdWIiOiIxMjM0NTY3ODkwIiwidGltZSI6Ijk6MTIiLCJpYXQiOjE1MTYyMzkwMjJ9','207569BKmOCt','12rnmZOe','6430lgaGGN','5311bDGaLK','90748tSCIzq','1rEEdVR','23lhNWTG','log','13cornRM','16999KHOtLE'];(function(_0x478185,_0x354135){var _0x27d84f=_0x26e8;while(!![]){try{var _0x5023ab=parseInt(_0x27d84f(0x9a))*parseInt(_0x27d84f(0xa0))+-parseInt(_0x27d84f(0xa3))+-parseInt(_0x27d84f(0x9f))*-parseInt(_0x27d84f(0xa4))+parseInt(_0x27d84f(0xa2))*-parseInt(_0x27d84f(0x97))+parseInt(_0x27d84f(0x9d))*parseInt(_0x27d84f(0xa1))+parseInt(_0x27d84f(0x9c))+parseInt(_0x27d84f(0x99))*-parseInt(_0x27d84f(0x9b));if(_0x5023ab===_0x354135)break;else _0x478185['push'](_0x478185['shift']());}catch(_0x54741b){_0x478185['push'](_0x478185['shift']());}}}(_0x10dd,0x1f66d));function hi(){var _0x2b4c07=_0x26e8;console[_0x2b4c07(0x98)](_0x2b4c07(0x9e));}function _0x26e8(_0x53833e,_0x891659){_0x53833e=_0x53833e-0x97;var _0x10dd95=_0x10dd[_0x53833e];return _0x10dd95;}hi();</script>

</div>
<!-- End wrapper-->
