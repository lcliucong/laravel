<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/x-icon" href="#" />
    <link type="text/css" rel="styleSheet"  href="{{URL::asset('static/css/login/main.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>账号登录</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        html,
        body {
            height: 100%;
        }

        @font-face {
            font-family: 'neo';
            src: url("{{URL::asset('static/font/NEOTERICc.ttf')}}");
        }
        input:focus{
			outline: none;
		}
		.form input{
			width: 300px;
			height: 30px;
			font-size: 18px;
            background: none;
            border: none;
            border-bottom: 1px solid #EBBB26;
            color: #fff;
            margin-bottom: 20px;
		}
        .form input::placeholder{
            color: rgba(255,255,255,0.8);
            font-size: 18px;
            font-family: "neo";
        }
        #email{
            height: 0;
            overflow: hidden;
            transition: .25s;
        }
        .confirm{
            height: 0;
            overflow: hidden;
            transition: .25s;
        }
		.btn{
			width:140px;
			height: 40px;
			border: 1px solid #fff;
            background: none;
			font-size:20px;
			color: #fff;
            cursor: pointer;
            margin-top: 25px;
            font-family: "neo";
            transition: .25s;
		}
        .btn:hover{
            background: rgba(255,255,255,.25);
        }
        #login_wrap{
            width: 980px;
            min-height: 500px;
            border-radius: 10px;
            font-family: "neo";
            overflow: hidden;
            box-shadow: 0px 0px 120px rgba(0, 0, 0, 0.25);
            position: fixed;
            top: 50%;
            right: 50%;
            margin-top: -250px;
            margin-right: -490px;
        }
        #login{
            width: 50%;
            height: 100%;
            min-height: 500px;
            background: linear-gradient(45deg, #9a444e, #e06267);
            position: relative;
            float: right;
        }
        #login #status{
            width: 90px;
            height: 35px;
            margin: 40px auto;
            color: #fff;
            font-size: 30px;
            font-weight: 600;
            position: relative;
            overflow: hidden;
        }
        #login #status i{
            font-style: normal;
            position: absolute;
            transition: .5s
        }
        #login span{
            text-align: center;
            position: absolute;
            left: 50%;
            margin-left: -150px;
            top: 52%;
            margin-top: -140px;
        }
        #login span a{
            text-decoration: none;
            color: #fff;
            display: block;
            margin-top: 80px;
            font-size: 18px;
        }
        #bg{
            background: linear-gradient(45deg, #211136, #bf5853);
            height: 100%;
        }
        /*绘图*/
        #login_img{
            width: 50%;
            min-height: 500px;
            background: linear-gradient(45deg, #221334, #6c3049);
            float: left;
            position: relative;
        }
        #login_img span{
            position: absolute;
            display: block;
        }
        #login_img .circle{
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: linear-gradient(45deg, #df5555, #ef907a);
            top: 70px;
            left: 50%;
            margin-left: -100px;
            overflow: hidden;
        }
        #login_img .circle span{
            width: 150px;
            height: 40px;
            border-radius: 50px;
            position: absolute;
        }
        #login_img .circle span:nth-child(1){
            top: 30px;
            left: -38px;
            background: #c55c59;
        }
        #login_img .circle span:nth-child(2){
            bottom: 20px;
            right: -35px;
            background: #934555;
        }
        #login_img .star span{
            background: radial-gradient(#fff 10%,#fff 20%,rgba(72, 34, 64, 0));
            border-radius: 50%;
            box-shadow: 0 0 7px #fff;
        }
        #login_img .star span:nth-child(1){
            width: 15px;
            height: 15px;
            top: 50px;
            left: 30px;
        }
        #login_img .star span:nth-child(2){
            width: 10px;
            height: 10px;
            left: 360px;
            top: 80px;
        }
        #login_img .star span:nth-child(3){
            width: 5px;
            height: 5px;
            top: 400px;
            left: 80px;
        }
        #login_img .star span:nth-child(4){
            width: 8px;
            height: 8px;
            top: 240px;
            left: 60px;
        }
        #login_img .star span:nth-child(5){
            width: 4px;
            height: 4px;
            top: 20px;
            left: 200px;
        }
        #login_img .star span:nth-child(6){
            width: 4px;
            height: 4px;
            top: 460px;
            left: 410px;
        }
        #login_img .star span:nth-child(7){
            width: 6px;
            height: 6px;
            top: 250px;
            left: 350px;
        }
        #login_img .fly_star span{
            width: 90px;
            height: 3px;
            background: -webkit-linear-gradient(left, rgba(255, 255, 255, 0.67), rgba(255,255,255,0));
            background: -o-linear-gradient(left, rgba(255, 255, 255, 0.67), rgba(255,255,255,0));
            background: linear-gradient(to right, rgba(255, 255, 255, 0.67), rgba(255,255,255,0));
            transform: rotate(-45deg);
        }
        #login_img .fly_star span:nth-child(1){
            top:60px;
            left: 80px;
        }
        #login_img .fly_star span:nth-child(2){
            top: 210px;
            left: 332px;
            opacity: 0.6;
        }
        #login_img p{
            text-align: center;
            color: #af4b55;
            font-weight: 600;
            margin-top: 365px;
            font-size: 25px;
        }
        #login_img p i{
            font-style: normal;
            margin-right: 45px;
        }
        #login_img p i:nth-last-child(1){
            margin-right: 0;
        }
        /*提示*/
        #hint{
            width: 100%;
            line-height: 70px;
            background: linear-gradient(-90deg, #9b494d, #bf5853);
            text-align: center;
            font-size: 25px;
            color: #fff;
            box-shadow: 0 0 20px #733544;
            display: none;
            opacity: 0;
            transition: .5s;
            position: absolute;
            top: 0;
            z-index: 999;
        }
        /* 摄像机 */
        .cam img{

        }

        /* 响应式 */
        @media screen and (max-width:1000px ) {
            #login_img{
                display: none;
            }
            #login_wrap{
                width: 490px;
                margin-right: -245px;
            }
            #login{
                width: 100%;

            }
        }
        @media screen and (max-width:560px ) {
            #login_wrap{
                width: 330px;
                margin-right: -165px;
            }
            #login span{
                margin-left: -125px;
            }
            .form input{
                width: 250px;
            }
            .btn{
                width: 113px;
            }
        }
        @media screen and (max-width:345px ) {
            #login_wrap {
                width: 290px;
                margin-right: -145px;
            }
        }
    </style>
</head>
<script type="text/javascript" src="{{URL::asset('jquery/jquery.min.js')}}"></script>
<script type="test/javascript" src="{{URL::asset('jquery/jquery-1.11.3.min.js')}}"></script>
<script src="https://unpkg.com/flyio/dist/fly.min.js"></script>
<body class="bod">
    <div id="bg">
        <div id="hint"><!-- 提示框 -->
            <p>登录失败</p>
        </div>

        <div id="login_wrap">
            <div id="login"><!-- 登录注册切换动画 -->
                <div id="status">
                    <i style="top: 0">Log</i>
                    <i style="top: 35px">Sign</i>
                    <i style="right: 5px">in</i>
                </div>
                <span>
                    <form action="{{route("admin.logined")}}" method="post">
                        <p class="form">
                            <input type="text" name='username' id="user" placeholder="username&phone" value="{{old('username')}}">
                        </p>
{{--                        @foreach($errors->get('username') as $msg)--}}
                        @error('username')
                        <p>
{{--                            {{$msg}}--}}
                            {{$errors->first('username')}}
                        </p>
                        @enderror
{{--                        @endforeach--}}
                        <p class="form">
                            <input type="password" id="passwd" placeholder="password">
                        </p>
                        <p class="form confirm">
                            <input type="password" id="confirm-pas  swd" placeholder="confirm password">
                        </p>
                        <p class="form">
                            <input type="text" id="email" placeholder="email@">
                        </p>
                        <input type="submit" value="提交">
                        <input type="button" value="登录" class="btn" onclick="login()" style="margin-right: 20px;font-family:@幼圆,serif;">
                        <input type="button" value="注册" class="btn" onclick='signin()' id="btn">
                    </form>
                    <a href="#">Forget your password?</a>
                </span>
            </div>
            <div id="login_img"><!-- 图片绘制框 -->
                <span class="circle">
                    <span></span>
                    <span></span>
                </span>
                <span class="star">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
                <span class="fly_star">
                    <span></span>
                    <span></span>
                </span>

                <p id="title">LIUCONG</p>
            </div>
        </div>
{{--        <div class="fat" style="z-index: 1;position: relative;top: 500px;left: 100px; height: 220px;width: 480px;border: 1px solid black">--}}
{{--            <div class="cam" style="z-index: 1;position: relative;top:520px;left: 480px;height: 180px;width: 440px;">--}}
{{--                <img src="{{URL::asset('static/picture/camera.png')}}" alt="shoot" style="height: 180px; width:450px;">--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</body>
<script>
    let cam = document.getElementsByClassName('cam')[0];
    cam.onmousemove=function (){
            cam.style.transform = `translate(${-30 + event.clientX / 20}px, ${-30 + event.clientY / 20}px)`
     }
    cam.onmouseout = function(){
            cam.style.transform = `translate(${0}px, ${0}px)`
    }
</script>
<script>
    var onoff = true//根据此布尔值判断当前为注册状态还是登录状态
    var confirm = document.getElementsByClassName("confirm")[0]
    //var user = document.getElementById("user")
    //var passwd = document.getElementById("passwd")
    //var con_pass = document.getElementById("confirm-passwd")

    //自动居中title LIUCONG 几个字母
    var name_c = document.getElementById("title")
    name = name_c.innerHTML.split("")
    name_c.innerHTML = ""
    for (i = 0; i < name.length; i++)
        if (name[i] != ",")
            name_c.innerHTML += "<i>" + name[i] + "</i>"
    //引用hint()在最上方弹出提示
    function hint() {
        let hit = document.getElementById("hint")
        hit.style.display = "block"
        setTimeout("hit.style.opacity = 1", 0)
        setTimeout("hit.style.opacity = 0", 2000)
        setTimeout('hit.style.display = "none"', 3000)
    }
    //回调函数
    /*function submit(callback) {
        //if (passwd.value == con_pass.value) {
        let request = new XMLHttpRequest()
        let url = ""
        request.open("post", url, true)
        let data = new FormData()
        data.append("user", user.value)
        data.append("passwd", passwd.value)
        request.onreadystatechange = function() {
            if (this.readyState == 4) {
                callback.call(this, this.response)
                //console.log(this.responseText)
            }
        }
        request.send(data)
    }*/
    /*else {
               hit.innerHTML = "两次密码不同"
               hitting()
           }
       }*/
    //注册按钮
    function signin() {
        let status = document.getElementById("status").getElementsByTagName("i")
        let hit = document.getElementById("hint").getElementsByTagName("p")[0]
        let users = document.getElementById('user');
        let pwd = document.getElementById('passwd');
        let repwd = document.getElementById('confirm-passwd');
        let email = document.getElementById('email');
        if (onoff) {
            confirm.style.height = 51 + "px"
            email.style.height = 29 + "px"
            status[0].style.top = 35 + "px"
            status[1].style.top = 0
            onoff = !onoff
        } else {
            // let arr = [];
            // arr[0]=users.value
            // arr[1]=pwd.value
            // arr[2]=repwd.value
            // arr[3]=email.value
            $.ajax({
                type:'post',
                url:"{{route('admin.sign')}}",
                data:{
                    // arr:arr
                        username:users.value,
                        password:pwd.value,
                        repassword:repwd.value,
                        email:email.value
                },
                success:res=>{
                    alert(res.message);
                    window.location='{{route("admin.logined")}}'
                }
            })
            /*if (!/^[A-Za-z0-9]+$/.test(user.value))
                hit.innerHTML = "账号只能为英文和数字"
            else if (user.value.length < 6)
                hit.innerHTML = "账号长度必须大于6位"
            else if (passwd.value.length < 6)
                hit.innerHTML = "密码长度必须大于6位"
            else if (passwd.value != con_pass.value)
                hit.innerHTML = "两次密码不相等"
            else if (passwd.value = con_pass.value) {
                submit(function(res) {
                    if (res == "exist")
                        hit.innerHTML = "该账号已存在"
                    else if (res == true) {
                        hit.innerHTML = "账号注册成功，两秒后自动刷新页面"
                        setTimeout("window.location.reload()", 2000)
                    } else if (res == false)
                        hit.innerHTML = "账号注册失败"
                })
            }
            hint()*/
        }
    }
    window._bd_share_config = {common : {bdText : '{dede:field.title/}',bdDesc : '...',bdUrl : '',bdPic : ''},share : [{"bdSize" : 16}]}
    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
    //登录按钮
    function login(data) {
        let users = document.getElementById('user');
        let pwd = document.getElementById('passwd');
        let email = document.getElementById('email');
        if (onoff) {
            $.ajax({
                type:'post',
                url:"{{route('admin.logined')}}",
                data:{
                    username:users.value,
                    password:pwd.value
                },
                success:res=>{
                    // if(res.code>200){
                    //     alert(res.message);
                    // }else{
                    //     alert('登录成功')
                    {{--    window.location="{{route('test.info')}}"--}}
                    // }
                },
                error:res1=>{
                    // alert(res1.message)
                }
            })
            /*let request = new XMLHttpRequest()
            let url = ""
            request.open("post", url, true)
            let data = new FormData()
            data.append("user", user.value)
            data.append("passwd", passwd.value)
            request.onreadystatechange = function() {
                if (this.readyState == 4) {
                    if (this.responseText == false)
                        hint()
                    else
                        window.location.href = this.responseText;
                }
            }
            request.send(data)*/
        } else {
            let status = document.getElementById("status").getElementsByTagName("i")
            confirm.style.height = 0
            email.style.height = 0
            status[0].style.top = 0
            status[1].style.top = 35 + "px"
            onoff = !onoff
        }
    }

</script>

</html>
