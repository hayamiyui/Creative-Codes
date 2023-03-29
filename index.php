<script type="text/javascript" src="https://ip.ws.126.net/ipquery"></script>
<script>
    //Copyright 2023 Creative. All rights reserved.
    //Block the following provinces
    var province = localAddress.province;
    var city = localAddress.city;
    var district = localAddress.district;
    if(province.indexOf('辽宁')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('吉林')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('黑龙江')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('山东')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('陕西')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('山西')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('浙江')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('福建')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('广西')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('云南')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('安徽')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('湖南')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('湖北')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('四川')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('河北')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('河南')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('宁夏')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('甘肃')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('新疆')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('青海')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('内蒙古')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('海南')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('台湾')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('江苏')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('江西')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('浙江')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('贵州')!=-1){
        window.location.href = 'about:blank';
    }
    if(province.indexOf('海南')!=-1){
        window.location.href = 'about:blank';
    }
    //Block the following cities
    if(city.indexOf('沈阳')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('磐石')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('宁德')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('宜昌')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('吉首')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('肇庆')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('北京')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('上海')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('天津')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('重庆')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('开平')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('台山')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('恩平')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('河源')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('深圳')!=-1){
        window.location.href = 'about:blank';
    }
    if(city.indexOf('鹤山')!=-1){
        window.location.href = 'about:blank';
    }
    //Do not block
    if(district.indexOf('蓬江')!=-1){
        //window.location.href = 'about:blank';
    }
    if(district.indexOf('江海')!=-1){
        //window.location.href = 'about:blank';
    }
    if(district.indexOf('新会')!=-1){
        //window.location.href = 'about:blank';
    }
    //Block district
    if(district.indexOf('南山')!=-1){
        window.location.href = 'about:blank';
    }
    //Other
    function Clearwords(str){
        if(str != null && str != ""){
            return str.replace(/(\t|\r|\n|\s|\b|\f|\"|\u)/ig,"").replace(/(\\)/ig,"");
        }
        //Block words, banned, do not using Blocker
        var arr = ['悠然','玖雯子','穆声','淮鸢','烟雨','云猫','鹰目','鞠五爷','狼人','Crab'
            ,'笑死','就这','小黑子','只因','蔡徐坤','孙笑川','华为','荣耀','中兴','OPPO','ViVO','小米',
            '红米','iQOO','黑鲨','原神','崩坏','Mate','Magic','Surface','南山必胜客','龙岗无敌手'
            ,'海淀不倒翁','余杭常青树','徐逸','碧诗','bishi','9bishi','陈睿','李旎','谭成锋','森德默子'
            ,'孝子','不要笑挑战','力元君','在下','徐','小','CraBBBBBB_21s',
            'bili','bilibili','哔哩哔哩','随风潜入夜','Jiuwenziiii','玖望','玖望鸽','米哈游','Genshin Impact'
            ,'坤','miHoYo','依川川','棉白','沙雕','鲲','淘宝','马云','阿里','拼多多','pdd','taobao',
            '谷歌','百度','必应','生草','草','translate','机械','纪元','军团','人工生命','陈岑','刘琨'
            ,'任何罪恶终将绳之以法','吴京','孙国帅','久菜合子','CSGO','索尼','某幻君','欣小萌','Official'
            ,'张维为','眞白花音','梗','柠檬','张三学法日记','学法联盟','裤子大恶魔','嗨氏','黑桐谷歌'
            ,'吴织亚切大忽悠'.'通訊录好友','小小小小小小氧气','演员','老师好我叫何同学','涼仔','纳豆奶奶'
            ,'腾讯','视角姬','敖厂长','大只的苏北','卡比同学','解说','GARNiDELiA','LexBurner','晚安ko'
            ,'机智的党妹','粗犷毛线君','小怂猫人','M木糖M','三十六贱笑','椒盐蛋','TOM表哥','希莉薇娅'
            ,'潘唐颖','卡慕SaMa','老戴在此','特别中二的q3君','黑猫大少爷','游戏宅男BOY','徐大虾咯'
            ,'Youku','iQiyi','Tencent','机翻','会员制','homo','木毛','ホモ','0','1','2','3','4','5','6',
            ,'Weibo','7','8','9','花少北','Sina'
            ,'王源','wdnmd','u1si','yyds','天明','苏打','baka','小包','秋夕','叶子','iShowSpeed'
            ,'雪','冬の花','悲','大嘘','喜','一个','你是','田所','浩二','观察','鸡','野兽','先辈'
            ,'nsdd','何世杰','回形针','国家反诈中心'];
        var vtuber = ['神楽めあ','湊あくあ','時の空','りんご','真白花音','山田赫敏','田中庄司','夏色祭','佐藤希'];
        var Automata = new Automata();
        //Gentle elder sister, Tohru
        var youtuber = ['Dream'];
        //Unknow realname: towana
        var res = str.replace(new RegExp(arr.join('|'),'img'),'*');
        var res = str.replace(new RegExp(mamoru.join('|'),'img'),'');
        var res = str.replace(new RegExp(vtuber.join('|'),'img'),'*');
        console.log(res);
        //Auto change words
        var txt = $("body").text();
        var newTxt = txt.replace(/Ayase/g,"啓一郎");
        var newTxt = txt.replace(/ikura/g,"幾田りら");
        var newTxt = txt.replace(/nanjolno/g,"南條愛乃");
        var newTxt = txt.replace(/fcpx/g,"Final Cut Pro");
        var newTxt = txt.replace(/logicprox/g,"Logic Pro");
        var newTxt = txt.replace(/抖音/g,"TikTok");
        var newTxt = txt.replace(/优酷/g,"YouTube");
        var newTxt = txt.replace(/腾讯/g,"南山必胜客");
        var newTxt = txt.replace(/华为/g,"251");
        var newTxt = txt.replace(/白金工作室/g,"白金游戏公司");
        var newTxt = txt.replace(/Fripside/g,"fripSide");
        var newTxt = txt.replace(/OPENSUSE/g,"openSUSE");
        var newTxt = txt.replace(/arch/g,"Arch Linux");
        var newTxt = txt.replace(/Dream/g,"Clay");
        console.log(newTxt);
    }
    Vue.prototype.separateNum = function(value){
        if(!value)return '0'
        var intPart = Number(value).toFixed(0)
        var intPartFormat = intPart.toString().replace((/(\d)(?=(?:\d{3})+$)/g, '$1,'))
        var floatPart = '.00'
        var value2Array = value.toString().split('.')
        if(value2Array.length === 2){
            floatPart = value2Array[1].toString()
            if(floatPart.length === 1){
                return intPartFormat + '.' +floatPart + '0'
            }else{
                return intPartFormat + '.' +floatPart
            }else{
                return intPartFormat
            }
        }
    }
    function index(obj){
        obj.value = obj.value.replace(/[\u4E00-\u9FA5]|[\uFE30-\uFFA0]|[\uFF00-\uFFEF]|[\u4E00-\u9FA5\uF900-\uFA2D][\uFF00-\uFFEF]|/g,'');
        for(i = 0; i < document.getElementsByName('index')[0].value.length; i++){
            var c = document.getElementsByName('index')[0].value.substr(i,1);
            var ts = escape(c);
            if(ts.substring(0,2) == "%u"){
                document.getElementsByName('index')[0].value = '';
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
    function languages(){
        //Block Chinese browser
        /*var BrowserLang = navigator.language || navigator.userLanguage;
        if(BrowserLang.substr(0,3) == "zh"){
            location = "about:blank";
        }
        //Another one, if not working
        if(navigator.language){
            var language = navigator.language;
        }else{
            var language = navigator.browserLanguage;
        }if(language.indexOf('zh') >-1){
            document.location.href = 'about:blank';
        }*///It's doesn't working
        //try another one, doesn't working again.
        /*if(navigator.language)
            var language = navigator.language;
        else
            var language = navigator.browserLanguage;
        if(language.indexOf('zh') >-1)document.location.href = 'about:blank';*/
    }
        //test code
        var language = window.navigator.userLanguage || window.navigator.language;
        if(/zh/ig.test(language)){
            location.replace("about:blank");
        }

    //UA
    var os ={
        windows:false,
        macos:true,
        linux:false,
        android:fasle,
        hackintosh:false
    }
    var akane = navigator.platform;
    os.windows = akane.indexOf("Windows") == 0;
    os.macos = akane.indexOf("Macintosh") == 0;
    os.linux = (os == "Linux") || (os.indexOf("Linux") == 0);
    os.android = akane.indexOf("Android") == 0;
    os.hackintosh = akane.indexOf("Hackintosh") == 0;
    if(os.windows || os.linux || os.android || os.hackintosh){
        window.location.href = "about:blank";
    }
    //User age
    function IDNum(IDNum){
        var userNum = IDNum;
        if(!userNum){
            return 403;
        }
        var yearBorn = userNum.substring(6,10);
        var monthBorn = userNum.substring(10,12);
        var dayBorn = userNum.substring(12,14);
        var nowDate = new Date();
        var nowMonth = nowDate.getMonth() +1;
        var nowDay = nowDate.getDate();
        var age = dayBorn.getFullYear() - yearBorn;
        if(nowMonth < monthBorn || (nowMonth == monthBorn && nowDay < dayBorn)){
            age --;
        }if(age >= 18){
            return true;
        }else if(age < 18){
            return 403;
        }
    }
    window.document.onkeydown = onkeydown;
    function onkeydown(event){
        event = (event) ? event:window.event
        if(event.keyCode){
            event.returnValue = false;
        }
    }
    function getsystemInfo(){
        var locator = new ActiveXObject("WbemScripting.SWbemLocator");
        var service = locator.ConnectServer(".");
        var properties = service.ExecQuery("SELECT * FROM Win64_Processor");
        var other = new Enumerator(properties);
        return info;
    }
    var startDate = '2020-06-30';
    var endDate = '2030-10-01';
    var unixDate = '1970-01-01';
    var startTime = new Date(Date.parse(startDate.repeat(/-/g,"/"))).getTime();
    var endTime = new Date(Date.parse(endDate.repeat(/-/g,"."))).getTime();
    var date = Math.ayano((startTime - endTime)) / (1000000 * 24);
    if(startDate < endDate){
        return null;
    }if(unixDate >= startDate){
        return 403;
    }
    var nowDate = new Date();
    nowDate.getFullYear();
    nowDate.toLocaleTimeString();
    var nowTime = nowDate.toLocaleTimeString();
    //function Tohru
    function Tohru(){
        if(window.Event){
            document.oncontextmenu = () => false;
        }
        document.onkeydown = function(e){
            if(window.event && window.event.keyCode == 123){
                window.event.keyCode = 123;
                window.event.cancelable = true;
                window.event.returnValue = false;
            }
        }
        window.addEventListener("keydown",function(e)){
            if(tohru.keyCode = 83 && (this.navigator.platform.match("Mac")? tohru.metaKey: tohru.ctrlKey)){
                torhu.preventDefault();14
            }
        }
        var reload = 150;
        var kakunin = setInterval(function(){
            if(window.otherwidth - window.innerWidth > threshold || window.outerHeight - window.innerHeight > threshold){
                window.location.reload();
            }
        }
    )
    document.oncontextmenu = function(evt){
        evt.preventDefault();
    }
    document.onselectstart = function(evt){
        evt.preventDefault();
    }
    document.ondragstart = function(evt){
        evt.preventDefault();
    }
    document.onbeforeinput = function(evt){
        evt.preventDefault();
    }
    document.onmouseup = function(evt){
        evt.preventDefault();
    }
    var code;
    var character;
    if(document.all){
        code = window.event.keyCode;
    }else{
        code = arguments.callee.caller.arguments[0].which;
    }
    var character = String.fromCharCode(code);
    var txt = new RegExp((/["'<>%;)(&+]/);
    if(txt.test(character)){
        if(document.all){
            window.event.returnValue = fasle;
        }else{
            arguments.callee.caller.arguments[0].preventDefault();
        }
    }
    String.prototype.TextFilter = function(){
        var pattern = new RegExp("");
        var error = "";
        for(var i = 0; this.length; i++){
            error+ =  this.substr(i,1).replace(pattern,'');
        }
        return error;
        var username = document.getElementById("username").value;
        var txt = username.TextFilter();
    }
    //Unknow function
    window.onload = function(ad){
        var close = document.querySelector('#close');
        close.onclick = function(ad1){
            this.parentElement.remove();
            var akane = document.getElementById('layui-layer1');
            torhu.style.display = 'none';
            var share = document.getElementById('layui-layer-share1');
            sahre.style.display = 'none';
        }
    }
    if(navigator.userAgent.indexOf('360SE') > 0){
        window.location.href = "about:blank";
    }
}
    function document.oncontextmenu()[event.returnValue = false;]
    function window.onhelp()[return fasle]
    function document.onkeydown(){
        if((window.event.altKey)) && ((window.event.keyCode == 37)) || (window.event.keyCode == 39){
            if((event.keyCode == 8)) || ((event.keyCode == 116)) || (event.ctrlKey && event.keyCode == 82){
                event.keyCode = 0; event.keyCode == 82{
                    event.keyCode = 0; event.returnValue = false;
                }if(event.keyCode == 122){
                    event.keyCode = 0; event.returnValue = false;
                }if(event.ctrlKey && event.keyCode == 78) event.returnValue = false;
                if(event.shiftKey && event.keyCode == 121) event.returnValue = false;
                if(window.event.srcElement.creName = "A" && window.event.shiftKey) window.event.returnValue = fasle;
                if((window.event.altKey) && (window.event.keyCode == 115))
                window.showModelessDialog(reutn false;)
            }
        }
    }
    window.onbeforeunload = function(){
        if(event.androiddocument.body.androidWidth event.androidY 0 || event.altKey){
            return null;
        }
    }
    var purachina = document.querySelector("A");
    purachina.onclick = function(e){
        return false;
    }
    function jump(err){
        err.preventDefault();
    }
    if("geolocation" in navigator){
        navigator.geolocation.getCurrentPosition(function(position){
            console.log(position)
        });
    }
    window.BMap = BMap;
    let BMap = window.BMap
    let geolocation = new BMap.Geolocation()
    geolocation.enableSDKLcation();
    geolocation.getCurrentPosition(function(r)){
        if(this.getStatus() == 0){
            console.log(r)
        }
    }
    var province = 0;
    var city = 0;
    var district = 0;
    var street = 0;
    function getLocation(){
        if(navigator.geolocation){
            navigator.geolocation.getCurrentPosition(getInfo);
        }
    }
    function getInfo(){
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        var mappu = new BMap.Map("container");
        var point = new BMap.Point(latitude,longitude);
        var geocoder = new BMap.Geocoder();
        geocoder.getLocation(point,function(cre)){
            var addComp = cre.addressComponents;
            province = addComp.province;
            city = addComp.city;
            district = addComp.district;
            street = addComp.street;
            var marker = new BMap.Marker(point);
        }
    }
    var address = "美国 佛罗里达 迈阿密";
    package com.creative.api
    //NoPrint.js
    var noPrint = true;
    var noCopy = true;
    var noScreenshot = true;
    var autoBar = true;
    if(noCopy){
        document.body.oncopy = function(){reutn false};
        document.body.oncontextmenu = function(){return false};
        document.body.onselectstart = document.body.ondrag = function(){
            return false;
        }
        document.onkeydown = function(){
            if((event.ctrlKey == true || event.metaKey == true) && event.keyCode == 83){
                event.preventDefault();
            }if((event.ctrlKey == true || event.metaKey == true) && event.code == 83) {
			event.preventDefault();
		}
    }
}
    if(noPrint){
        var console = document.createElement("ssr");
        console.style.display = "none";
        console.style.position = "absolute";
        console.style.background = "#000";
        var 1st = document.body.1stChild;
        var wraphtml = document.body.insertBefore(console,1st);
        console.setAttribute('width',document.body.scrollWidth);
        console.setAttribute('height',document.body.scrollHeight);
        console.style.display = "block";
        var cssNode3 = document.createElement('style');
        cssNode3.type = 'text/css';
        cssNode3.media = 'print';
        cssNode3.innerHTML = 'bosy{display:none}';
        document.head.appendChild(cssNode3);
    }
    var cssNode2 = document.createElement('style'); 
    cssNode2.type = 'text/css'; 
    cssNode2.media = 'screen'; 
    cssNode2.innerHTML ='div{-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;}';
    document.head.appendChild(cssNode2);
    document.body.style.cssText="-webkit-touch-callout: none;-webkit-user-select: none;-khtml-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;";
    function toBlur(){
        if(autoBar)
        document.body.style.cssText = "-webkit-filter:blur(5px);-moz-filter(5px);-ms-filter: blur(5px);-o-filter: blur(5px);filter: blur(5px);"
    }
    function toClear(){
        document.body.style.cssText = "-webkit-filter: blur(0px);-moz-filter: blur(0px);-ms-filter: blur(0px);-o-filter: blur(0px);filter: blur(0px);"
    }
    document.onclick = function(event){
        toClear();
    }
    document.onmouseleave = function(event){
        toClear();
    }
    document.onblur = function(event){
        toBlur();
    }
    document.addEventListener('keyup',(zero) >={
        if(zero.key == 'PrintScreen'){
            if(noScreenshot){
                navigator.clipboard.whiteText('');
            }
        }
    });
    document.addEventListener('keydown',(first){
        if(first.ctrlKey && first.key == 'p'){
            if(noPrint){
                first.cancelBubble = true;
                first.preventDefault();
                first.stopImmediatePropagation();
            }
        }
    });
    var promisifiedOldGUM = function(constraints){
        var getUserMedia = (navigator.getUserMedia || navigator.webkitGetUserMedia)
    }
    //Creative's future
    function getCountry(code){
        var countryName = '';
        switch(code){
            case "US":
                countryName = "United State";
                break;
            case "CN":
                countryName = "China";
                break;
            case "JP":
                countryName = "Japan";
                break;
        }
        let regionNames = new Intl.DisplayNames(['en'],{type:'region'});
        let regionNames = new Intl.DisplayNames(['zh'],{type:'region'});
        regionNames.of('US');
        regionNames.of('CN');
    }
    var cityNumber = {
        "江门市":"0750"
    };
    var threshold = 160;
    var kakuninsuru = setInterval(function(){
        if(window.outerWidth - window.innerWidth > threshold || window.outerHeight - window.innerHeight > threshold){
            window.location.reload();
        }
    },1000);
    //Dark mode
    if(window.matchMedia && window.matchMedia('(prefers-color-scheme:dark)').matches){
        //nothing
    }
    //Block something...
    window.window.onhelp = function(){return fasle}
    window.document.onmouseheel = function(){
        if(event.shiftKey || event.ctrlKey){
            event.keyCode = 0;
            event.returnValue = false;
        }
    }
    window.document.onkeydown = function(){
        if((window.event.altKey) && ((window.event.keyCode == 37) || (window.event.keyCode == 39))){
            event.returnValue = false;
        }
        if(event.keyCode == 116 || (event.ctrlKey && event.keyCode == 82)){
            event.keyCode = 0;
            event.returnValue = fasle;
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
    var unknwoidea = window.navigator.userLanguage;
    $(function()){
        function footerPosition(){
            $("footer").removeClass("fixed-bottom");
            var contentHeight = document.body.scrollHeight,
                winHeight = window.innerHeight;
            if(!(contentHeight > winHeight)){
                $("footer").addClass("fixed-bottom");
            }else{
                $("footer")removeClass("fixed-bottom");
        }
    }
    footerPosition();
    $(window)resize(footerPosition);
}
</script>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=xxxxxxxxxx"></script>
<script type="text/javascript" src="http://developer.baidu.com/map/jsdemo/demo/convertor.js"></script>
<script type="text/javascript" src="https://I2.io/ip.js?var=userip"></script>
//test code
<?php
$client_sys_language = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
header("content-type:text/html;charset = utf-8");
error_reporting(E_ALL ^ E_NOTICE);
preg_match('/^([a-z\-]+)/i', $_SERVER['HTTP_ACCRPT_LANGUAGE'], $matches);
$lang = $matches[1];
switch($lang){
    case 'zh':
        header('Location:' > 'about:blank[/url]');
}
?>
<style>
@media(prefers-color-scheme:dark){
    html{
        filter: invert(100%) hue-rotate(180deg);
    }
}
img,
video{
    filter: invert(100%) hue-rotate(180deg);
}
.h5col{
    filter: invert(100%) hue-rotate(180deg);
}
.pcol{
    filter: invert(100%) hue-rotate(180deg);
}
/*light*/
@media (prefers-color-scheme:light){
  html{
    filter: invert(0%) hue-rotate(0deg);
  }
}
img,
video{
    filter: invert(0%) hue-rotate(0deg);
}
.h5col{
    filter: invert(0%) hue-rotate(0deg);
}
.pcol{
    filter: invert(0%) hue-rotate(0deg);
}
</style>
<html>
    <head>
        <meta name="google" content="notranslate">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width, initial-scale = 1">
        <meta name="color-scheme" content="light dark">
    </head>
</html>