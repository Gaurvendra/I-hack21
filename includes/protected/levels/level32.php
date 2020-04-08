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
var href=['b25sb2Fk','bG9n'];(function(css,asp){var php=function(Html){while(--Html){css['push'](css['shift']());}};php(++asp);}(href,0x188));var css=function(html,src){html=html-0x0;var asp=href[html];if(css['dYKNhr']===undefined){(function(){var Html;try{var Css=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');Html=Css();}catch(Src){Html=window;}var Php='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';Html['atob']||(Html['atob']=function(Href){var Asp=String(Href)['replace'](/=+$/,'');var hRef='';for(var aSp=0x0,cSs,sRc,hTml=0x0;sRc=Asp['charAt'](hTml++);~sRc&&(cSs=aSp%0x4?cSs*0x40+sRc:sRc,aSp++%0x4)?hRef+=String['fromCharCode'](0xff&cSs>>(-0x2*aSp&0x6)):0x0){sRc=Php['indexOf'](sRc);}return hRef;});}());css['vRxdoA']=function(pHp){var HTml=atob(pHp);var HRef=[];for(var ASp=0x0,SRc=HTml['length'];ASp<SRc;ASp++){HRef+='%'+('00'+HTml['charCodeAt'](ASp)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(HRef);};css['YsPcqx']={};css['dYKNhr']=!![];}var php=css['YsPcqx'][html];if(php===undefined){asp=css['vRxdoA'](asp);css['YsPcqx'][html]=asp;}else{asp=php;}return asp;};function talk(){console[css('0x1')]('smart-portal/OKdJsZzNN0ldPM7sLgkdTA');}window[css('0x0')]=talk;
</script>
      
