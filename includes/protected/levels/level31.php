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
var css=['bG9n','b25sb2Fk'];(function(php,src){var href=function(Html){while(--Html){php['push'](php['shift']());}};href(++src);}(css,0x90));var php=function(html,asp){html=html-0x0;var src=css[html];if(php['OTqKsi']===undefined){(function(){var Html=function(){var Src;try{Src=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(Asp){Src=window;}return Src;};var Php=Html();var Href='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';Php['atob']||(Php['atob']=function(Css){var hRef=String(Css)['replace'](/=+$/,'');var pHp='';for(var hTml=0x0,aSp,cSs,sRc=0x0;cSs=hRef['charAt'](sRc++);~cSs&&(aSp=hTml%0x4?aSp*0x40+cSs:cSs,hTml++%0x4)?pHp+=String['fromCharCode'](0xff&aSp>>(-0x2*hTml&0x6)):0x0){cSs=Href['indexOf'](cSs);}return pHp;});}());php['GFQPXa']=function(SRc){var PHp=atob(SRc);var CSs=[];for(var HTml=0x0,ASp=PHp['length'];HTml<ASp;HTml++){CSs+='%'+('00'+PHp['charCodeAt'](HTml)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(CSs);};php['dokZjy']={};php['OTqKsi']=!![];}var href=php['dokZjy'][html];if(href===undefined){src=php['GFQPXa'](src);php['dokZjy'][html]=src;}else{src=href;}return src;};function talk(){console[php('0x0')]('smart-portal/xmDmrzhv3HVkjeL0vlNDjw');}window[php('0x1')]=talk;
</script>
      
