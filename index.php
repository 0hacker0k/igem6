<!doctype html>
<html lang="zh-tw">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="./phaser-3.55.2/dist/phaser.js"></script>
    <script src="./phaser-3.55.2/dist/phaser.min.js"></script>
</head>
<body>
<canvas id="myCanvas"></canvas>
<button class="button-balanced" id="save">save</button>
<a href="" download="your_img.png" id="save_href">
</a>
<script>
    // Convert to 32bit integer
    var content = "DOMLOQAQ";
    function stringToHash(string) {
        var hash = 0;
        if (string.length == 0) return hash;
        for (i = 0; i < string.length; i++) {
            char = string.charCodeAt(i);
            hash = ((hash << 5) - hash) + char;
            hash = (hash >>> 6) + hash;
            hash = hash & hash;
            if(hash<0)hash=-hash;
        }
        return hash;
    }
    var input=stringToHash(content);
    
    //這一行去抓取canvas的標籤
    let canvas = document.getElementById("myCanvas");
    //接著指定繪圖方式
    let ctx = canvas.getContext("2d");
    //讓canvas的高度和寬度等於整個畫面，讓整個視窗都是你的畫布
    canvas.height = window.innerHeight;
    canvas.width = window.innerWidth;
    ctx.translate(200, 200);//更改原點位置
    count=Math.floor((input+7)/5)%16+4;
    //alert(input.size());
    var r_base=(((input>>>13)%1024)*67%255);
    var g_base=(((input>>>16)%1024)*67%255);
    var b_base=(((input>>>19)%1024)*67%255);
    var r,g,b,a,x1,x2,x3,y1,y2,y3,i,a,x,y;
    for(var j=0;j<count;j++){
        i=j;
        var temp=stringToHash((i*1157).toString());
        x=(temp>>>4)%21-10;
        y=(temp>>>5)%21-10;
        r=(r_base+(temp>>>1)%64-32);
        r=check_color(r);
        g=(g_base+(temp>>>2)%64-32);
        g=check_color(g);
        b=(b_base+(temp>>>3)%64-32);
        b=check_color(b);
        a=((temp>>>4)%61)/100+0.2;
        x1=(((input>>>(j+0))&15)+3)*5;
        y1=(((input>>>(j+4))&15)+3)*5;
        x2=(((input>>>(j+8))&15)+3)*5;
        y2=(((input>>>(j+12))&15)+3)*5;
        x3=(((input>>>(j+6))&15)+4)*5;//應該根據(x1,y1) (x2,y2)來決定下一個點的範圍
        y3=(((input>>>(j+9))&15)+4)*5;
        x4=(((input>>>(j+11))&15)+4)*5;
        y4=(((input>>>(j+7))&15)+4)*5;
        ctx.translate(x, y);
        
        ctx.beginPath(); //在繪製任何東西之前，我們都要來個開始，像全天下所有的故事一樣
        ctx.moveTo(0,0);
        ctx.strokeStyle = "rgba(0,0,0,0)";
        ctx.lineTo(x1,y1);//我們用moveTo(x,y)來指定線的起點座標
        //ctx.strokeStyle = "rgba(0,0,0,0.8)";
        //ctx.lineTo(0,50)//之後使用lineTo(x,y)來指定與前一個座標相連的點
        if(x4<x2 && y4>y2 && y4<y3 && x4>x3){
            ctx.bezierCurveTo(x3, y3, x4, y4, x2, y2);
        }else{
            ctx.quadraticCurveTo(x3, y3, x2, y2);
        }
        
        
        //ctx.moveTo(0,0)
        ctx.fillStyle = "rgba("+r+","+g+","+b+","+a+")";
        ctx.fill();
        ctx.stroke();//用stroke()來繪製相連點的線
        ctx.translate(-x, -y);
        ctx.rotate(360/count * Math.PI / 180);//畫布座標旋轉
    }
    function check_color(color){
        if(color>=256)return 255;
        else return color;
    }
    var butSave = document.getElementById("save");
    butSave.onclick=function(){
        var svaeHref = document.getElementById("save_href");
        /*
        * 傳入對應想要儲存的圖片格式的mime型別
        * 常見：image/png，image/gif,image/jpg,image/jpeg
        */
        var tempSrc = canvas.toDataURL("image/png");
        svaeHref.href=tempSrc; 
        svaeHref.click();
    }; 
    
    /*ctx.beginPath()
    //沿用寬度及色彩設定
    ctx.lineWidth = 3;
    ctx.strokeStyle = "rgba(255,165,0,0.5)";
    ctx.fillStyle = "rgba(255,165,0,0.5)";
    //使用arc(x,y,r,s,e)畫一個圓x,y是圓心的座標，r是半徑，s和e是起點和終點的角度
    ctx.arc(100,100,25,0,Math.PI*1.5);
    ctx.fill();
    ctx.stroke();*/
</script>
</body>
