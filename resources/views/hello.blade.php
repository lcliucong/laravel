<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
{{--    <meta  name="csrf-token" content="{{ csrf_token() }}" />--}}
    <title>Laravel框架</title>
</head>
{{--<script src="{{ asset('js/main.js') }}"></script>--}}
<script src="/jquery/jquery.min.js"></script>
<body>
<script src="https://unpkg.com/flyio/dist/fly.min.js"></script>
{{--<form action="{{route('message.msg')}}" method="post">--}}
    <input type="text" id="sels" name="selcontent">@csrf
    <input type="button" id="sele" value="搜索">
    <table width="1000px" border="1px" cellspacing="" cellpadding="" style="margin: 0 auto">
        <tr>
            <th>ID</th>
            <th>姓名</th>
            <th>性别</th>
            <th>班级</th>
            <th>分数</th>
            <th>操作</th>
        </tr>

        @foreach($info as $info)
        <tr class="ptr" style="text-align: center">
            <td>{{$info->id}}</td>
            <td>{{$info->name}}</td>
            <td>@if($info->sex==0)
                    女
                @elseif($info->sex==1)
                    男
                @else
                    其他
                @endif</td>
            <td>{{$info->class}}</td>
            <td>{{$info->score}}</td>
            <td>
                <button class="delbtn" onclick="del(this,'{{$info->id}}')">删除</button>
                <button>修改</button>
            </td>
        </tr>
        @endforeach
        <tr>
            <button id="insert">添加</button>
        </tr>

    </table>
{{--</form>--}}
</body>
<script>
    // window.onload=function (){
    var fly = new Fly;
    var ins = document.getElementById('insert');
    var sel = document.getElementById('sele');
    var sels = document.getElementById('sels');
    sel.onclick=function(){
        fly.post("{{route('add.selects')}}",{
            name:sels.value
        })
        .then(function (res){
            console.log(res);
        })
    }
    //引入fly实例

    var b = document.getElementById('met')
    function del(obj,id){
       fly.post("{{route('add.del')}}", {
           id:id,
        })
            .then(success=>{
                alert(success.data.message);

                $(obj).parents('tr').remove();

            },error=>{
                console.log(error.data.message) ;
            })
            // .catch(function (error) {
            //     console.log(error);
            // });
    }

        ins.onclick=function (){
            // alert(1)
                window.showModalDialog("adds",window,"dialogWidth:500px;dialogHeight:550px");
        }
        if(!window.showModalDialog){
            window.showModalDialog=function(url,name,option){
                if(window.hasOpenWindow){
                    window.newWindow.focus();
                }
                var re = new RegExp(";", "g");
                var option  = option.replace(re, '","'); //把option转为json字符串
                var re2 = new RegExp(":", "g");
                option = '{"'+option.replace(re2, '":"')+'"}';
                option = JSON.parse(option);
                var openOption = 'width='+parseInt(option.dialogWidth)+',height='+parseInt(option.dialogHeight)+',left='+(window.screen.width-parseInt(option.dialogWidth))/2+',top='+(window.screen.height-30-parseInt(option.dialogHeight))/2;
                window.hasOpenWindow = true;
                window.newWindow = window.open(url,name,openOption);
            }
        }
    // }
</script>
</html>
