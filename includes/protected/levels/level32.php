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
             <div class="col-md-6">

                    <div class="panel panel-c-white">
                        <div class="panel-heading">
                           
                           <!-- Filled panel with custom color-->
                        </div>
                        <div class="panel-body">
                            <p>

<img src="<?php echo $img ?>" width="300px" height="300px">
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
      
