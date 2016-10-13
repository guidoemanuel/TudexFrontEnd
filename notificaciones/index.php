<meta charset="utf-8">



<style type="text/css">
*{
      cursor: default;
}
a{
  color:#fff
}
a:hover{
  color:#ccc;
  text-decoration:none
}
.noti-close-button{
  float:right;
  font-size:20px;
  font-weight:bold;
  color:#fff;
  -webkit-text-shadow:0 1px 0 #fff;
  text-shadow:0 1px 0 #fff;
  opacity:.8;
}
.noti-close-button,.noti-close-button:focus{
  color:#000;
  text-decoration:none;
  opacity:.4;
  filter:alpha(opacity=40)
}
button.noti-close-button{
  padding:0;
  background:transparent;
  border:0;
  -webkit-appearance:none
}
.noti-top-full-width{
  top:0;
  right:0;
}
.noti-bottom-full-width{bottom:0;right:0;width:100%}
.noti-top-left{top:12px;left:12px}
.noti-top-right{top:12px;right:12px}
.noti-bottom-right{right:12px;bottom:12px}
.noti-bottom-left{bottom:12px;left:12px}
#noti-caja *{
  text-align: left;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box;
  box-sizing:border-box;
  }
#noti-caja>div{
  margin:0 0 6px;
  padding:15px 15px 15px 50px;
  width:300px;
  background-position:15px center;
  background-repeat:no-repeat;
  box-shadow:0 0 12px #ccc;
  color:#fff;
  opacity:.8;
  }



#noti-caja>.noti-info{background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=")!important}
#noti-caja>.noti-error{background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=")!important}
#noti-caja>.noti-success{background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==")!important}
#noti-caja>.noti-warning{background-image:url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=")!important}


.noti-success{background-color:#00CA00}
.noti-error{background-color:#FF0D00}
.noti-info{background-color:#00C5FF}
.noti-warning{background-color:#FF7D00}

</style>

<?php  
  $ncaras = rand(0,55);
  if ($ncaras==0) {
    $cara="٩(͡๏̯͡๏)۶";
  }
  if ($ncaras==1) {
    $cara="<('.')> ";
  }
  if ($ncaras==2) {
    $cara="٩(○̮̮̃•̃)۶";
  }
  if ($ncaras==3) {
    $cara="٩(-̮̮̃-̃)۶";
  }
  if ($ncaras==4) {
    $cara="٩(-̮̮̃•̃)۶";
  }
  if ($ncaras==5) {
    $cara="٩(×̯×)۶";
  }
  if ($ncaras==6) {
    $cara="⊙▂⊙";
  }
  if ($ncaras==7) {
    $cara="●▂● ";
  }
  if ($ncaras==8) {
    $cara="ಠ_ಠ ";
  }
  if ($ncaras==9) {
    $cara=" ಥ_ಥ ";
  }
  if ($ncaras==10) {
    $cara="¯(°_o)/¯ ";
  }
  if ($ncaras==11) {
    $cara="ب_ب ";
  }
  if ($ncaras==12) {
    $cara="o(╥﹏╥)o";
  }
  if ($ncaras==13) {
    $cara="٩(͡๏̯͡๏)۶";
  }
  if ($ncaras==14) {
    $cara="٩(͡๏̯͡๏)۶";
  }
  if ($ncaras==15) {
    $cara="<('o'< ";
  }
  if ($ncaras==16) {
    $cara="^('-')^";
  }
  if ($ncaras==17) {
    $cara="(>‘o’)>";
  }
  if ($ncaras==18) {
    $cara="<(' .' )> ";
  }

  if ($ncaras==19) {
    $cara="┌( ಠ_ಠ )┘";
  }
  if ($ncaras==20) {
    $cara="ʕ•ܫ•ʔ";
  }
  if ($ncaras==21) {
    $cara="(•̪◡•̪)";
  }
  if ($ncaras==22) {
    $cara=" (•̪(エ)•̪)  ";
  }

  if ($ncaras==23) {
    $cara="(•̪◡•̪)";
  }
  if ($ncaras==24) {
    $cara="(┛◉Д◉)┛";
  }
  if ($ncaras==25) {
    $cara="(ノ^_^)ノ";
  }
  if ($ncaras==26) {
    $cara="(´•ω•`)";
  }
  if ($ncaras==27) {
    $cara="(╯°ᴖ°）╯";
  }
  if ($ncaras==28) {
    $cara="ヘ(^_^ヘ)";
  }
  if ($ncaras==29) {
    $cara="( ・_・)";
  }
  if ($ncaras==30) {
    $cara="(-_-) ";
  }
  if ($ncaras==31) {
    $cara="(~￣▽￣)~";
  }
  if ($ncaras==32) {
    $cara="(︶ω︶)";
  }
  if ($ncaras==33) {
    $cara="(✖╭╮✖)";
  }
  if ($ncaras==34) {
    $cara="［(－－)］";
  }
  if ($ncaras==35) {
    $cara="(¬_¬)";
  }
  if ($ncaras==36) {
    $cara="ヾ(^ ^ゞ )";
  }
  if ($ncaras==37) {
    $cara="ლ(ಠ益ಠლ)";
  }
  if ($ncaras==38) {
    $cara="(-’_’-)";
  }
  if ($ncaras==39) {
    $cara="(’_’ノ) ";
  }
  if ($ncaras==40) {
    $cara="✖‿✖";
  }
  if ($ncaras==41) {
    $cara="（＾∀＾）";
  }
  if ($ncaras==42) {
    $cara="(づ ᴖ ɜ ᴖ)づ";
  }
  if ($ncaras==43) {
    $cara="(~ ب ヮ ب )~";
  }
  if ($ncaras==44) {
    $cara="(◕▽◕)";
  }

  if ($ncaras==45) {
    $cara="╭( ◕﹏◕ )╮";
  }
  if ($ncaras==46) {
    $cara="(╥﹏╥)";
  }
  if ($ncaras==47) {
    $cara="( ◕/ω/◕ )❀";
  }
  if ($ncaras==48) {
    $cara="(´◕ ▽ ◕`)";
  }
  if ($ncaras==49) {
    $cara="(´⌣`ʃƪ)";
  }
  if ($ncaras==50) {
    $cara="(╯°□°)╯";
  }
  if ($ncaras==51) {
    $cara=" (ﾉ◕ヮ◕)ﾉ";
  }
  if ($ncaras==52) {
    $cara="╰(ಠ ω ಠ)╯";
  }
  if ($ncaras==53) {
    $cara="ミ òㅅó ミ";
  }
  if ($ncaras==54) {
    $cara="ლ(╹◡╹ლ)";
  }
  if ($ncaras==55) {
    $cara="òᴥó";
  }
?>


<div class="noti">
  <div id="noti-caja" >
    <div class="noti noti-info">
      <button class="noti-close-button"><?php echo "$cara" ;?></button>
      <div class="noti-message">Esta es una noti de informacion, por favor usala correctamente.</div>
    </div>
  </div>
  
  <div id="noti-caja">
    <div class="noti noti-error">
      <button class="noti-close-button"><?php echo "$cara" ; ?></button>
      <div class="noti-message">El email o la contraseña ingresados no son correctos, por favor intenta nuevamente.</div>
    </div>
  </div>
  
  <div id="noti-caja" >
    <div class="noti noti-success">
      <button class="noti-close-button"><?php echo "$cara" ; ?></button>
      <div class="noti-message">Perfecto! todo ha salido de acuerdo a lo planeado </div>
    </div>
  </div>
  
  <div id="noti-caja">
    <div class="noti noti-warning">
      <button class="noti-close-button"><?php echo "$cara" ; ?></button>
      <div class="noti-message">Hemos detectado un dispositivo sospechoso, porfabor confirma que tu eres tu! <a href="">Has clik aqui!</a>  </div>
    </div>
  </div>
</div>

