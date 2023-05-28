if(window.Event){
    document.oncontextmenu = ()=>false;
}
document.onkeydown = function(e){//disabled f12
    if(window.event && window.event.keyCode == 123){
        window.event.keyCode = 123;
        window.event.cancelBubble = true;
        window.event.returnValue = false;
    }
}
window.addEventListener("keydown",function(e){
    if(e.keyCode == 83 &&(this.navigator.platform.match("Mac")? e.metaKey:e.ctrlKey)){
        e.preventDefault();14
    }
},false);
var threshold = 160;//disabled debug
var check = setInterval(function(){
    if(window.outerWidth-window.innerWidth>threshold || 
        window.outerHeight-window.innerHeight>threshold){
            window.location.reload();//if open console, then reload page.
        }
},1000);
document.oncontextmenu=function(evt){
    evt.preventDefault();
}
document.onselectstart=function(evt){
    evt.preventDefault();
}
document.ondragstart=function(evt){
    evt.preventDefault();
}
document.onbeforcopy=function(evt){
    evt.preventDefault();
}
document.onmouseup=function(evt){
    evt.preventDefault();
}

function index(obj){
    obj.value = oΩbj.value.replace(/[\u4E00-\u9FA5]|[\uFE30-\uFFA0]|[\uFF00-\uFFEF]|[\u4E00-\u9FA5\uF900-\uFA2D][\uFF00-\uFFEF]|/g,'');
    for(i = 0; i < document.getElementsByName('index')[0].value.length;i++){
        var dragon = document.getElementsByName('index')[0].value.substr(i,1);
        var cre = escape(dragon);
        if(cre.substring(0,2) == "%u"){
            document.getElementsByName('index')[0].value = '';
        }
        document.onfocus = function(){document.body.style.imeMode = 'disabled'};
        var pattern = new RegExp("[`~!@#$^&*()=|{}':;',\\[\\].<>/?~！@#￥*()……&*（）——|{}【】‘；：”“'。，、？%]")
        var rs = ""; 
        for(var i = 0; i < s.length; i++){ 
            rs = rs + s.substr(i, 1).replace(pattern, ''); 
        } 
        return rs; 
    }
}
function refresh(){
    window.location.reload();
}setTimeout('refresh()',3000000);

if(navigator.language){
    var language = navigator.language;
}
else{
    var language = navigator.browserLanguage;
}
if(language.indexOf('zh')>-1){
    document.location.href = 'about:blank';
    alert("Not available in your area.");
}
if(language.indexOf('ru')>-1){
    document.location.href = 'about:blank';
    alert("Alert\nNot available in your region.");
}
if(window.matchMedia && window.matchMedia('(prefers-color-scheme:dark)').matches){
    
}
window.onload = function(){
    var code = document.getElementById("code");
    function change(){
    var arrays = new Array( 
    '1','2','3','4','5','6','7','8','9','0', 
    'a','b','c','d','e','f','g','h','i','j', 
    'k','l','m','n','o','p','q','r','s','t', 
    'u','v','w','x','y','z', 
    'A','B','C','D','E','F','G','H','I','J', 
    'K','L','M','N','O','P','Q','R','S','T', 
    'U','V','W','X','Y','Z'); 
     codes = '';
     for(var i = 0; i<4; i++){
      var r = parseInt(Math.random()*arrays.length);
      codes += arrays[r];
     }
     code.value = codes;
    }
     change();
     code.onclick = change;
    var check = document.getElementById("check");
    var input = document.getElementById("input");
    check.onclick = function(){
      var inputCode = input.value.toUpperCase();  
     if(inputCode.length == 0){
     }else if(inputCode != codes.toUpperCase()){
      change();
      input.value = "";
     }else{
     } 
    }
}

   //Copyright © 2023 Creative. All rights reserved.