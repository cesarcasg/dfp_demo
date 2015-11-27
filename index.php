<?php

$sitio = ($_REQUEST['s']) ? $_REQUEST['s']:"www.eluniversal.com.mx";

?>
<!DOCTYPE html>
<html>
<head>
<title>El Universal CPN. Google DoubleClick - DFP</title>
<!-- begin demo includes -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/grid/grid.css" rel="stylesheet">

<script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>
<style>
#div-dfp-bottom_leaderboard {
    margin: 0 auto;
    width: 100%;
    position: fixed;
    background: rgba(64, 64, 64, 0.5);
    bottom: 0px;
    left: 0px;
    z-index: 999;
    padding: 10px 0;
        text-align: center;
    }
    
#div-dfp-bottom_leaderboard .dfp-bottom_leaderboard-close {
    position: absolute;
    right: 5px;
    top: 10px;
    border: 1px solid #A5A5A4;
    background-color: #fff;
    color: #A5A5A4;
    cursor: pointer;
    width: 21px;
    height: 19px;
    padding-top: 2px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
}
#div-dfp-skin1, #div-dfp-skin2 {
    display: none;
    width: 130px;
    max-width: 130px;
    position: fixed;
    margin: 17px -671px;
    left: 50%;
    right: 50%;
}
#div-dfp-skin2 {
    margin: 17px 532px;
}
.dfp_slot {
    text-align: center;
}

</style>
<script type="text/javascript">
jQuery(document).ready(function ($) {
 $('.dfp-bottom_leaderboard-close').click(function() {
    $('#div-dfp-bottom_leaderboard').css({"display":"none", "z-index":"0"});
  });

 });
</script>
<!-- end demo includes -->

<!-- degin DFP REQUIRED includes -->
<script type="text/javascript">
<!--//--><![CDATA[//><!--
    <!------ Inicio Ad Server de Google DFP ------>
    (function() {
        var useSSL = 'https:' == document.location.protocol;
        var src = (useSSL ? 'https:' : 'http:') +
        '//www.googletagservices.com/tag/js/gpt.js';
        document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
    })();
//--><!]]>
</script>
<script type="text/javascript">
<!--//--><![CDATA[//><!--
    googletag.cmd.push(function() {
    var mapping_megabanner = googletag.sizeMapping().
        addSize([320, 400], [[320, 50], [300, 50]]).
        addSize([320, 700], [[320, 50], [300, 50]]).
        addSize([480, 200], [[320, 50], [300, 50]]).
        addSize([768, 200], [[320, 50], [300, 50]]).
        addSize([980, 200], [980, 250]).
        addSize([1000, 200],[980, 250]).
      build();

    var mapping_billboard = googletag.sizeMapping().
        addSize([320, 400], [[320, 50], [300, 50]]).
        addSize([320, 700], [[320, 50], [300, 50]]).
        addSize([480, 200], [[320, 50], [300, 50]]).
        addSize([768, 200], [0, 0]).
        addSize([980, 200], [[728, 90],[970,90]]).
        addSize([1000, 200],[[728, 90], [970,250], [970, 90], [980, 65],[980, 250]]).
      build();
  
    var mapping_leaderboard_superleaderboard = googletag.sizeMapping().
        addSize([320, 400], [[320, 50], [300, 50]]).
        addSize([320, 700], [[320, 50], [300, 50]]).
        addSize([480, 200], [[320, 50], [300, 50]]).
        addSize([768, 200], [728,90]).
        addSize([980, 200], [[728,90], [970,90]]).
        addSize([1000, 200], [[728,90], [970,90]]).
      build();

    var mapping_right = googletag.sizeMapping().
        addSize([320, 400], [[300,250], [300,600], [300,400], [300,100]]).
        addSize([320, 700], [[300,250], [300,600], [300,400], [300,100]]).
        addSize([480, 200], [[300,250], [300,600], [300,400], [300,100]]).
        addSize([768, 200], [0,0]).
        addSize([980, 200], [[300,250], [300,600], [300,400], [300,100]]).
        addSize([1000, 200], [[300,250], [300,600], [300,400], [300,100]]).
      build();

    var mapping_skin = googletag.sizeMapping().
        addSize([320, 400], [0,0]).
        addSize([320, 700], [0,0]).
        addSize([480, 200], [0,0]).
        addSize([768, 200], [0,0]).
        addSize([980, 200], [0,0]).
        addSize([1000, 200], [[120,600],[120,960], [160,600],[160,960], [130, 1260]]).
      build();

    var mapping_libre_left = googletag.sizeMapping().
        addSize([320, 400], [300,250]).
        addSize([320, 700], [300,250]).
        addSize([480, 200], [300,250]).
        addSize([768, 200], [300,250]).
        addSize([980, 200], [[300,250], [440,370]]).
        addSize([1000, 200], [[300,250], [440,370]]).
      build();
  
    var mapping_libre_right = googletag.sizeMapping().
        addSize([320, 400], [300,250]).
        addSize([320, 700], [300,250]).
        addSize([480, 200], [300,250]).
        addSize([768, 200], [0,0]).
        addSize([980, 200], [[300,250],[300,90],[325,90],[120,60]]).
        addSize([1000, 200], [[300,250],[300,90],[325,90],[120,60]]).
      build();

    var mapping_libre_center = googletag.sizeMapping().
        addSize([320, 400], [[150,240], [120,60]]).
        addSize([320, 700], [[150,240], [120,60]]).
        addSize([480, 200], [[150,240], [120,60]]).
        addSize([768, 200], [0,0]).
        addSize([980, 200], [[150,240], [120,60]]).
        addSize([1000, 200], [[150,240], [120,60]]).
      build();

    var mapping_libre_top = googletag.sizeMapping().
        addSize([320, 400], [0,0]).
        addSize([320, 700], [0,0]).
        addSize([480, 200], [0,0]).
        addSize([768, 200], [0,0]).
        addSize([980, 200], [[300,90], [325,90], [120,60]]).
        addSize([1000, 200], [[300,90], [325,90], [120,60]]).
      build();
      
      <?php
      
      if($sitio !="www.eluniversal.com.mx"){
        echo("googletag.defineSlot('/178068052/<?=$sitio;?>/home/portada_megabanner', [980,250], 
'div-dfp-megabanner').defineSizeMapping(mapping_megabanner).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);");
      }
      ?>


    googletag.defineSlot('/178068052/<?=$sitio;?>/home/portada_top1', [980,65], 'div-dfp-top1').defineSizeMapping(mapping_billboard).addService(googletag.pubads()).setCollapseEmptyDiv(true,true); 

    googletag.defineSlot('/178068052/<?=$sitio;?>/home/portada_top2', [980,65], 
'div-dfp-top2').defineSizeMapping(mapping_billboard).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);

    googletag.defineSlot('/178068052/<?=$sitio;?>/home/portada_skin1', [120, 600], 'div-dfp-skin1').defineSizeMapping(mapping_skin).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);
    googletag.defineSlot('/178068052/<?=$sitio;?>/home/portada_skin2', [120, 600], 'div-dfp-skin2').defineSizeMapping(mapping_skin).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);

    googletag.defineSlot('/178068052/<?=$sitio;?>/home/portada_right1', [300, 250], 'div-dfp-right1').defineSizeMapping(mapping_right).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);
    googletag.defineSlot('/178068052/<?=$sitio;?>/home/portada_right2', [300, 250], 'div-dfp-right2').defineSizeMapping(mapping_right).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);
    googletag.defineSlot('/178068052/<?=$sitio;?>/home/portada_right3', [300, 250], 'div-dfp-right3').defineSizeMapping(mapping_right).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);

    googletag.defineSlot('/178068052/<?=$sitio;?>/home/portada_bottom_leaderboard', [728, 90], 'div-dfp-bottom_leaderboard'). defineSizeMapping(mapping_leaderboard_superleaderboard).addService(googletag.pubads()).setCollapseEmptyDiv(true,true); 

    googletag.defineOutOfPageSlot('/178068052/<?=$sitio;?>/home/portada_takeover', 'div-dfp-takeover').addService(googletag.pubads());
    googletag.pubads().enableSyncRendering();

/*    googletag.pubads().enableSingleRequest();    */

    googletag.enableServices();
    });

    <!------ Fin de Ad Server de Google DFP ------>
    
//--><!]]>
</script>
</head>
<body>
<span class="label label-info">skin1</span>
<div id='div-dfp-skin1' class='dfp_slot' >
  <span class='line'>
    <script type='text/javascript'>
		  googletag.cmd.push(function() { googletag.display('div-dfp-skin1'); });
 	  </script>
  </span>
</div>
<span class="label label-info">skin2</span>
<div id='div-dfp-skin2' class='dfp_slot' >
  <span class='line'>
    <script type='text/javascript'>
		  googletag.cmd.push(function() { googletag.display('div-dfp-skin2'); });
 	  </script>
  </span>
</div>
 <div class="container">
 <span class="label label-info">megabanner</span>
     <div id='div-dfp-megabanner' class='dfp_slot' >
      <span class='line'>
        <script type='text/javascript'>
              googletag.cmd.push(function() { googletag.display('div-dfp-megabanner'); });
          </script>
      </span>
    </div>
     <span class="label label-info">top1</span>
    <div id='div-dfp-top1' class='dfp_slot' >
      <span class='line'>
        <script type='text/javascript'>
              googletag.cmd.push(function() { googletag.display('div-dfp-top1'); });
          </script>
      </span>
    </div>
    <div class="page-header">
        <h1>El Universal DFP - Clase.in</h1>
        <p class="lead">Posiciones de publicidad.</p>
      </div>
    <span class="label label-info">top2 expandible</span>
    <div id='div-dfp-top2' class='dfp_slot' >
        <span class='line'>
        <script type='text/javascript'>
          googletag.cmd.push(function() { googletag.display('div-dfp-top2'); });
        </script>
        </span>
    </div>
     <h3>Contenido</h3>
      <p>Ejemplo <strong>posiciones de publicidad</strong>.</p>
      <div class="row">
        <div class="col-md-8">
        <!-- syntax -->
        <p>1. Incluir en <b>script tags</b> en el header</p>
<pre class="prettyprint js linenums">
&lt;script type='text/javascript'&gt;
    <!------ Inicio Ad Server de Google DFP ------>
    (function() {
        var useSSL = 'https:' == document.location.protocol;
        var src = (useSSL ? 'https:' : 'http:') +
        '//www.googletagservices.com/tag/js/gpt.js';
        document.write('<scr' + 'ipt src="' + src + '"></scr' + 'ipt>');
    })();
    &lt;/script&gt;
</pre>
        <p>2. Incluir en <b>script tags</b> en el header, definición del mapping y slots</p>
<pre class="prettyprint js linenums">
&lt;script type='text/javascript'&gt;
     googletag.cmd.push(function() {
        /* tamaños de creativos a llamar de acuerdo a viewportsize */
        var mapping_billboard = googletag.sizeMapping().
            addSize([320, 400], [[320, 50], [300, 50]]).
            addSize([320, 700], [[320, 50], [300, 50]]).
            addSize([480, 200], [[320, 50], [300, 50]]).
            addSize([768, 200], [0, 0]).
            addSize([980, 200], [[728, 90],[970,90]]).
            addSize([1000, 200],[[728, 90], [970,250], [970, 90], [980, 65],[980, 250]]).
          build();
          
        var mapping_megabanner = googletag.sizeMapping().
            addSize([320, 400], [[320, 50], [300, 50]]).
            addSize([320, 700], [[320, 50], [300, 50]]).
            addSize([480, 200], [[320, 50], [300, 50]]).
            addSize([768, 200], [[320, 50], [300, 50]]).
            addSize([980, 200], [980, 250]).
            addSize([1000, 200],[980, 250]).
          build();
  
        var mapping_leaderboard_superleaderboard = googletag.sizeMapping().
            addSize([320, 400], [[320, 50], [300, 50]]).
            addSize([320, 700], [[320, 50], [300, 50]]).
            addSize([480, 200], [[320, 50], [300, 50]]).
            addSize([768, 200], [728,90]).
            addSize([980, 200], [[728,90], [970,90]]).
            addSize([1000, 200], [[728,90], [970,90]]).
          build();

        var mapping_right = googletag.sizeMapping().
            addSize([320, 400], [[300,250], [300,600], [300,400], [300,100]]).
            addSize([320, 700], [[300,250], [300,600], [300,400], [300,100]]).
            addSize([480, 200], [[300,250], [300,600], [300,400], [300,100]]).
            addSize([768, 200], [0,0]).
            addSize([980, 200], [[300,250], [300,600], [300,400], [300,100]]).
            addSize([1000, 200], [[300,250], [300,600], [300,400], [300,100]]).
          build();

        var mapping_skin = googletag.sizeMapping().
            addSize([320, 400], [0,0]).
            addSize([320, 700], [0,0]).
            addSize([480, 200], [0,0]).
            addSize([768, 200], [0,0]).
            addSize([980, 200], [0,0]).
            addSize([1000, 200], [[120,600],[120,960], [160,600],[160,960], [130, 1260]]).
          build();
  
        var mapping_libre_right = googletag.sizeMapping().
            addSize([320, 400], [300,250]).
            addSize([320, 700], [300,250]).
            addSize([480, 200], [300,250]).
            addSize([768, 200], [0,0]).
            addSize([980, 200], [[300,250],[300,90],[325,90],[120,60]]).
            addSize([1000, 200], [[300,250],[300,90],[325,90],[120,60]]).
          build();

        var mapping_libre_top = googletag.sizeMapping().
            addSize([320, 400], [0,0]).
            addSize([320, 700], [0,0]).
            addSize([480, 200], [0,0]).
            addSize([768, 200], [0,0]).
            addSize([980, 200], [[300,90], [325,90], [120,60]]).
            addSize([1000, 200], [[300,90], [325,90], [120,60]]).
          build();
        /* definición de cada uno de los slots en donde
        $id = 178068052
        $sitio = www.eluniversal.com.mx 
        para pruebas se puede utilizar www.test.com 
        PRODUCCION: www.clase.in
        $page = home
        $ad_unit = portada_top1
        [980,65] -> la dimension por default que va a traer del creativo y que se sobreescribe por la variable de mapping
        div-dfp-top1 -> id del div en donde está la llamada "display" del slot
        mapping_billboard -> nombre de la variable del mapping
        setCollapseEmptyDiv(true,true) -> colapsa el div si no hay creativo
        
        */
        
    googletag.defineSlot('/178068052/<?=$sitio;?>/home/portada_megabanner', [980,250], 
'div-dfp-megabanner').defineSizeMapping(mapping_megabanner).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);

        
        googletag.defineSlot('/178068052/www.eluniversal.com.mx/home/portada_top1', [980,65], 'div-dfp-top1').defineSizeMapping(mapping_billboard).addService(googletag.pubads()).setCollapseEmptyDiv(true,true); 

        googletag.defineSlot('/178068052/www.eluniversal.com.mx/home/portada_top2', [980,65], 
    'div-dfp-top2').defineSizeMapping(mapping_billboard).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);

        googletag.defineSlot('/178068052/www.eluniversal.com.mx/home/portada_skin1', [120, 600], 'div-dfp-skin1').defineSizeMapping(mapping_skin).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);
        googletag.defineSlot('/178068052/www.eluniversal.com.mx/home/portada_skin2', [120, 600], 'div-dfp-skin2').defineSizeMapping(mapping_skin).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);

        googletag.defineSlot('/178068052/www.eluniversal.com.mx/home/portada_right1', [300, 250], 'div-dfp-right1').defineSizeMapping(mapping_right).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);
        googletag.defineSlot('/178068052/www.eluniversal.com.mx/home/portada_right2', [300, 250], 'div-dfp-right2').defineSizeMapping(mapping_right).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);
        googletag.defineSlot('/178068052/www.eluniversal.com.mx/home/portada_right3', [300, 250], 'div-dfp-right3').defineSizeMapping(mapping_right).addService(googletag.pubads()).setCollapseEmptyDiv(true,true);

        googletag.defineSlot('/178068052/www.eluniversal.com.mx/home/portada_bottom_leaderboard', [728, 90], 'div-dfp-bottom_leaderboard'). defineSizeMapping(mapping_leaderboard_superleaderboard).addService(googletag.pubads()).setCollapseEmptyDiv(true,true); 
        // implementación del interstitial de modo síncrono, depende de que exista jquery en la página.
        googletag.defineOutOfPageSlot('/178068052/www.eluniversal.com.mx/home/portada_takeover', 'div-dfp-takeover').addService(googletag.pubads());
        
        googletag.pubads().enableSyncRendering();
    /*    googletag.pubads().enableSingleRequest();    */
        googletag.enableServices();
        });
                 &lt;/script&gt;
</pre>
        <!-- syntax -->
        </div>
        <div class="col-md-4">
             <span class="label label-info">right1</span>
            <div id='div-dfp-right1' class='dfp_slot' >
                <span class='line'>
                <script type='text/javascript'>
                  googletag.cmd.push(function() { googletag.display('div-dfp-right1'); });
                </script>
                </span>
            </div>
             <span class="label label-info">right2</span>
            <div id='div-dfp-right2' class='dfp_slot' >
                <span class='line'>
                <script type='text/javascript'>
                  googletag.cmd.push(function() { googletag.display('div-dfp-right2'); });
                </script>
                </span>
            </div>
             <span class="label label-info">right3</span>
            <div id='div-dfp-right3' class='dfp_slot' >
                <span class='line'>
                <script type='text/javascript'>
                  googletag.cmd.push(function() { googletag.display('div-dfp-right3'); });
                </script>
                </span>
             </div>
        
        </div>

      </div>
        <div class="row">
        <div class="col-md-12">
           <p>3. Incluir en el <b>body</b>, la llamada para el display de cada uno de los slots, debe de coincidir el id del div así como la etiqueta dentro de googletag.display</p>
            <pre class="prettyprint js linenums">
                &lt;div id='div-dfp-top1' class='dfp_slot'&gt;
                    &lt;script type='text/javascript'&gt;
                    googletag.cmd.push(function() { googletag.display('div-dfp-top1'); });
                    &lt;/script&gt;
                &lt;div&gt;
            </pre>
        </div>
        </div>
      <footer class="footer">
        <p>Eng. Cesar Saavedra.&copy; El Universal CPN 2015</p>
      </footer>
                   <span class="label label-info">bottomleaderboard</span>
<div id='div-dfp-bottom_leaderboard' class='dfp_slot'>
    <div class="dfp-bottom_leaderboard-close">X</div>
    <span class='line'>
    <script type='text/javascript'>
      googletag.cmd.push(function() { googletag.display('div-dfp-bottom_leaderboard'); });
    </script>
    </span>
</div>
</div> <!-- /container -->
<span class="label label-info">takeover</span>
<div id='div-dfp-takeover' class='dfp_slot' >
    <script type='text/javascript'>
    googletag.cmd.push(function() { googletag.display('div-dfp-takeover'); });
    </script>
</div>
</body>
</html>