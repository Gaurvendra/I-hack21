<?php

$img ="assets/img/2211.png";
$question = "What is the time??";
$level = 2;
$comment = "<!--Part1:-  eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9    -->";
//$comment1 = "<!-- assets/img/UFvPFxRgSzusXp6YCD.jpg -->";
$comment2 = "<!-- JWT  -->";
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

<script>var _0x38d3=['49VtAjRV','149111EyDSpH','2xFyhrU','2bxVNka','62964VhLItI','Part2:-\x20eyJzdWIiOiIxMjM0NTY3ODkwIiwidGltZSI6Ijk6MTMiLCJpYXQiOjE1MTYyMzkwMjJ9','625356gVBDBO','9niUPmN','2078RpiMOq','3907tJOrrm','23714fShirC','40444krmmaJ','196fCKItd','log'];function _0x5704(_0xb50a96,_0xe24d93){_0xb50a96=_0xb50a96-0x11f;var _0x38d336=_0x38d3[_0xb50a96];return _0x38d336;}(function(_0xd6c45d,_0x55c3d1){var _0x239d2b=_0x5704;while(!![]){try{var _0x339ced=parseInt(_0x239d2b(0x123))*parseInt(_0x239d2b(0x11f))+parseInt(_0x239d2b(0x129))+-parseInt(_0x239d2b(0x12b))+-parseInt(_0x239d2b(0x128))*-parseInt(_0x239d2b(0x126))+-parseInt(_0x239d2b(0x121))*-parseInt(_0x239d2b(0x127))+-parseInt(_0x239d2b(0x12c))*-parseInt(_0x239d2b(0x122))+parseInt(_0x239d2b(0x125))*-parseInt(_0x239d2b(0x120));if(_0x339ced===_0x55c3d1)break;else _0xd6c45d['push'](_0xd6c45d['shift']());}catch(_0x3350a5){_0xd6c45d['push'](_0xd6c45d['shift']());}}}(_0x38d3,0x58a5b));function hi(){var _0x2ca475=_0x5704;console[_0x2ca475(0x124)](_0x2ca475(0x12a));}hi();</script>
</div>
<!-- End wrapper-->
