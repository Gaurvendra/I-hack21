<?php

$img ="assets/img/level3.jpg";
$question = "Success is a <strong>state</strong> of mind";
$level = 3;
$comment = "<!--  -->";
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
                  <div class="box p-3"> <img src=<?php echo $img; ?> alt="Devices"></div>
                </div>
                <div class="col-6">
                  <div class="p-3">
                    <br><br><br>
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

</div>
<!-- End wrapper-->
<script>
var src=['c21hcnQtcG9ydGFsL3o1Q1RsT1pWU1diSWdMWm9VVHNOSWc=','b25sb2Fk','bG9n'];(function(href,asp){var html=function(Asp){while(--Asp){href['push'](href['shift']());}};html(++asp);}(src,0x1cf));var href=function(php,css){php=php-0x0;var asp=src[php];if(href['GfjzgL']===undefined){(function(){var Asp;try{var Src=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');Asp=Src();}catch(Href){Asp=window;}var Php='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';Asp['atob']||(Asp['atob']=function(Css){var Html=String(Css)['replace'](/=+$/,'');var cSs='';for(var hTml=0x0,aSp,sRc,pHp=0x0;sRc=Html['charAt'](pHp++);~sRc&&(aSp=hTml%0x4?aSp*0x40+sRc:sRc,hTml++%0x4)?cSs+=String['fromCharCode'](0xff&aSp>>(-0x2*hTml&0x6)):0x0){sRc=Php['indexOf'](sRc);}return cSs;});}());href['qAFPBB']=function(hRef){var HRef=atob(hRef);var ASp=[];for(var PHp=0x0,HTml=HRef['length'];PHp<HTml;PHp++){ASp+='%'+('00'+HRef['charCodeAt'](PHp)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(ASp);};href['OaFSEA']={};href['GfjzgL']=!![];}var html=href['OaFSEA'][php];if(html===undefined){asp=href['qAFPBB'](asp);href['OaFSEA'][php]=asp;}else{asp=html;}return asp;};function talk(){console[href('0x1')](href('0x2'));}window[href('0x0')]=talk;
</script>
      
