<?php

$img ="assets/img/404.png";
$question = "Give the name???";
$level = 2;
$comment = "<!-- Base64-JWT     -->";
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

<img src="<?php echo $img; ?>"  width="300" height="300" >
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
<script>var _0x8e36=['1ANMXVt','2BEZzSk','156564SLbiIY','188469VjEGkx','ZXlKaGJHY2lPaUpJVXpJMU5pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SnpkV0lpT2lJeE1qTTBOVFkzT0Rrd0lpd2libUZ0WlNJNklsUm9iMjFoY3lCVGFHVnNZbmtpTENKcFlYUWlPakUxTVRZeU16a3dNako5LjhtNDBlNlJtTzdVeUNTSUJaYkRJSUZ6MTQ1RlZKNFZMZGFIWEFDZEl0Rms=','399803wllMtw','87268VJqrmF','355620mVgVus','287767ScWVun','5020TDLyMo','7EBDOjP','log','11EOswHR'];function _0x2e49(_0x481fa6,_0x528c68){_0x481fa6=_0x481fa6-0xe3;var _0x8e36f2=_0x8e36[_0x481fa6];return _0x8e36f2;}(function(_0x5612aa,_0x52258e){var _0x254edc=_0x2e49;while(!![]){try{var _0x348ed6=-parseInt(_0x254edc(0xe5))*-parseInt(_0x254edc(0xed))+parseInt(_0x254edc(0xe8))+-parseInt(_0x254edc(0xe7))+-parseInt(_0x254edc(0xe3))+parseInt(_0x254edc(0xec))*-parseInt(_0x254edc(0xe9))+-parseInt(_0x254edc(0xee))*parseInt(_0x254edc(0xef))+-parseInt(_0x254edc(0xe6))*-parseInt(_0x254edc(0xea));if(_0x348ed6===_0x52258e)break;else _0x5612aa['push'](_0x5612aa['shift']());}catch(_0x497a1a){_0x5612aa['push'](_0x5612aa['shift']());}}}(_0x8e36,0x5e3d9));function hi(){var _0x57b762=_0x2e49;console[_0x57b762(0xeb)](_0x57b762(0xe4));}hi();</script>
</div>
<!-- End wrapper-->
