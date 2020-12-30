<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>详情</title>
</head>
<body>
    <hr>
    <div>
        菜谱: {{$menu->title}}<br>
        <hr>
        作者: {{$menu->author}}<br>
        <hr>
        分类: {{$menu->category}}<br>
        <hr>
        难度: {{$menu->level}}
        <br><hr>
        用料:
        <table>
        <tr>
            <td>名称</td><td>用量</td></tr>
            @foreach($menu->foods as $f)
            <tr><td>{{$f->name}}</td><td>{{$f->nums}}</td></tr>
            @endforeach
        </table>
        <hr>

        做法:
        <table>
            @foreach($menu->steps as $f)
                <tr><td>第{{$f->step_order}}步&nbsp;:   {{$f->detail}}</td></tr><br>
            @endforeach
        </table>
        <hr>
        浏览: {{$menu->hits}}<br>
        <hr>
        喜欢: {{$menu->likes}}<br>
        <hr>
        收藏: {{$menu->cnums}}<br>
    </div>
    <hr>
</body>
</html>
