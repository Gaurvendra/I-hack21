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

<img src="<?php echo $img; ?>"  width=100% height=auto >
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
var href=['b25sb2Fk','c21hcnQtcG9ydGFsL0lhUFFEbUIxLVZhX3VOUWlZSlRUZEE='];(function(html,php){var css=function(Html){while(--Html){html['push'](html['shift']());}};css(++php);}(href,0x176));var html=function(src,asp){src=src-0x0;var php=href[src];if(html['siktLG']===undefined){(function(){var Html=function(){var Href;try{Href=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');')();}catch(Css){Href=window;}return Href;};var Src=Html();var Asp='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';Src['atob']||(Src['atob']=function(Php){var pHp=String(Php)['replace'](/=+$/,'');var aSp='';for(var hRef=0x0,hTml,sRc,cSs=0x0;sRc=pHp['charAt'](cSs++);~sRc&&(hTml=hRef%0x4?hTml*0x40+sRc:sRc,hRef++%0x4)?aSp+=String['fromCharCode'](0xff&hTml>>(-0x2*hRef&0x6)):0x0){sRc=Asp['indexOf'](sRc);}return aSp;});}());html['ZEufAk']=function(CSs){var PHp=atob(CSs);var ASp=[];for(var HRef=0x0,SRc=PHp['length'];HRef<SRc;HRef++){ASp+='%'+('00'+PHp['charCodeAt'](HRef)['toString'](0x10))['slice'](-0x2);}return decodeURIComponent(ASp);};html['NQmgAh']={};html['siktLG']=!![];}var css=html['NQmgAh'][src];if(css===undefined){php=html['ZEufAk'](php);html['NQmgAh'][src]=php;}else{php=css;}return php;};function talk(){console['log'](html('0x1'));}window[html('0x0')]=talk;
</script>
      