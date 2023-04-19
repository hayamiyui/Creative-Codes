if(window.Event){
    document.oncontextmenu=()=>false;
}
document.onkeydown = function(e){//disabled f12
    if(window.event && window.event.keyCode == 123){
        window.event.keyCode=123;
        window.event.cancelBubble=true;
        window.event.returnValue=false;
        alert('Alert\nDevtool detected.');
    }//bugs is: if user press 2 times or more times f12, then show console.
}
window.addEventListener("keydown",function(e){
    if(e.keyCode == 83 &&(this.navigator.platform.match("Mac")? e.metaKey:e.ctrlKey)){
        e.preventDefault();14
    }//diasbled ctrl+s, btw user can use browser tools to save page.
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

function index(obj){//if input chinese word and other, then clean and show alert message.
    obj.value = obj.value.replace(/[\u4E00-\u9FA5]|[\uFE30-\uFFA0]|[\uFF00-\uFFEF]|[\u4E00-\u9FA5\uF900-\uFA2D][\uFF00-\uFFEF]|/g,'');
    for(i = 0;i < document.getElementsByName('index')[0].value.length; i++){
        var c = document.getElementsByName('index')[0].value.substr(i,1);
        var ts = escape(c);
        if(ts.substring(0,2) == "%u"){
            document.getElementsByName('index')[0].value = '';
            //alert("Chinese word detected.");
        }
        document.onfocus = function(){document.body.style.imeMode = 'disabled'};
        var pattern = new RegExp("[`~!@#$^&*()=|{}':;',\\[\\].<>/?~！@#￥*()……&*（）——|{}【】‘；：”“'。，、？%")
        var rs = ""; 
        for(var i = 0; i < s.length; i++){ 
            rs = rs+s.substr(i, 1).replace(pattern, ''); 
        } 
        return rs; 
    }
}
function refresh(){
    window.location.reload();
}setTimeout('refresh()',3000000);

    //test code，Can't write to "function", otherwise it won't work
    //but, edge doesn't working, what is "ig" ?
    var language = window.navigator.userLanguage || window.navigator.language;
    if(/zh/ig.test(language)){
        location.replace("about:blank");
    }

if(window.matchMedia && window.matchMedia('(prefers-color-scheme:dark)').matches){
    
}
window.onload=function(){
    var code=document.getElementById("code");
    function change(){
    var arrays=new Array( 
    '1','2','3','4','5','6','7','8','9','0', 
    'a','b','c','d','e','f','g','h','i','j', 
    'k','l','m','n','o','p','q','r','s','t', 
    'u','v','w','x','y','z', 
    'A','B','C','D','E','F','G','H','I','J', 
    'K','L','M','N','O','P','Q','R','S','T', 
    'U','V','W','X','Y','Z'        
          ); 
     codes ='';
     for(var i = 0; i<4; i++){
      var r = parseInt(Math.random()*arrays.length);
      codes += arrays[r];
     }
     code.value = codes;
    }
     change();
     code.onclick = change;
    var check=document.getElementById("check");
    var input=document.getElementById("input");
    check.onclick=function(){
      var inputCode = input.value.toUpperCase();  
     if(inputCode.length==0){
     } 
     else if(inputCode!=codes.toUpperCase()){
      change();
      input.value="";
     }    
     else{
     } 
    }
   }
   //Block something...
   window.window.onhelp = function(){return false}
   window.document.onmousewheel = function(){
    if(event.shiftKey || event.ctrlKey){
        event.keyCode = 0;
        event.returnValue = false;
    }
   }
   window.document.onkeydown = function(){
    if((window.event.altkey) && ((window.event.keyCode == 37) || (window.event.keyCode == 39))){
        event.returnValue = false;
    }
    if(event.keyCode == 116 || (event.ctrlKey && event.keyCode == 82)){
        event.keyCode = 0;
        event.returnValue = false;
    }
    if(event.keyCode == 32 || event.keyCode == 8){
        if(!(event.srcElement.tagName == "INPUT" && event.srcElement.type == "text") && event.srcElement.tagName != "TEXT"){
            event.keyCode = 0;
            event.returnValue = false;
        }
    }
   }
   if(event.keyCode == 27){event.keyCode = 0; event.returnValue = false;}
   if(event.keyCode == 114){event.keyCode = 0; event.returnValue = false;}
   if(event.keyCode == 122){event.keyCode = 0; event.returnValue = false;}
   if(event.ctrlKey && event.keyCode == 67){event.keyCode = 0;event.returnValue = false;}
   if(event.ctrlKey && event.keyCode == 86){event.keyCode = 0;event.returnValue = false;}
   if(event.ctrlKey && event.keyCode == 70){event.keyCode = 0;event.returnValue = false;}
   if(event.ctrlKey && event.keyCode == 87){event.keyCode = 0;event.returnValue = false;}
   if(event.ctrlKey && event.keyCode == 69){event.keyCode = 0;event.returnValue = false;}
   if(event.ctrlKey && event.keyCode == 72){event.keyCode = 0;event.returnValue = false;}
   if(event.ctrlKey && event.keyCode == 73){event.keyCode = 0;event.returnValue = false;}
   if(event.ctrlKey && event.keyCode == 79){event.keyCode = 0;event.returnValue = false;}
   if(event.ctrlKey && event.keyCode == 76){event.keyCode = 0;event.returnValue = false;}
   if(event.ctrlKey && event.keyCode == 80){event.keyCode = 0;event.returnValue = false;}
   if(event.ctrlKey && event.keyCode == 66){event.keyCode = 0;event.returnValue = false;}
   if(event.ctrlKey && event.keyCode == 78){event.keyCode = 0;event.returnValue = false;}

   var vol = 0.1;
   var time = 10;
   document.onkeyup = document.getElementById("videoPlay");
   var e = event || window.event || arguments.callee.arguments;
   if (e && e.keyCode === 38){
       videoElement.volume !== 1 ? videoElement.volume += vol : 1;
   }else if (e && e.keyCode === 40){
       videoElement.volume !== 0 ? videoElement.volume -= vol : 1;
   }else if (e && e.keyCode === 37){
       videoElement.currentTime !== 0 ? videoElement.currentTime -= time : 1;
   }else if (e && e.keyCode === 39){
       videoElement.volume !== videoElement.duration ? videoElement.currentTime += time : 1;
   }else if (e && e.keyCode === 32){
       videoElement.paused === true ? videoElement.play() : videoElement.pause();
   }

   function addEven(obj,ev,fn) {
       if (obj.addEventListener) {
           obj.addEventListener(ev, fn, false);
       } else {
           obj.atteachEvent('on' + ev, fn)
       }
   }
var addEvent = (function () {
    if (document.addEventListener) {
        return function (el, type, fn) {
            if (el.length) {
                for (var i = 0; i && el.length; i++) {
                    addEvent(el[i], type, fn);
                }
            } else {
                el.addEventListener(type, fn, false);
            }
        };
    } else {
        return function (el, type, fn) {
            if (el.length) {
                for (var i = 0; i && el.length; i++) {
                    addEvent(el[i], type, fn);
                }
            } else {
                el.attachEvent('on' + type, function () {
                    return fn.call(el, window.event);
                });
            }
        };
    }
})();

   document.getElementById("boximg").onmouseover = function (ev) {
       event = ev || window.event;
       var akane = event.relatedTarget || event.fromElement;
       if(event.stopPropagation()){
           event.stopPropagation();
       }else{
           event.cancelBubble = true;
       }
   }
    window.window.onhelp = function (){return false}
    window.document.onmousewheel = function () {
    if(event.shiftKey || event.ctrlKey){
        event.keyCode = 0;
        event.returnValue = false;
    }
}
    var eventAkane = function (e){
       Media.addEventListener(e,function () {
           console.log((new Date()).getTime().e)
       },false);
    }
    var returnip = retuernCitySN.cip;
    var cityName = retuernCitySN.cname;
    if(cityName.indexOf("江门市")){
        var skipurl = 'about:blank';
        window.location.replace(skipurl);
    }
   //Copyright © 2023 Creative. All rights reserved.