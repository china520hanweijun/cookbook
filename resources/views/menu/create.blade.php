@extends('layouts.header')

@section('title')
    创建菜谱
@endsection
@section('content')
    <nav>
        <div>
            <form class="form-horizontal" method="post" action="{{route('menu.store')}}" role="form">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">菜谱名称</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="菜谱名称">
                </div>
                <div class="form-group">
                    <label for="author">菜谱作者</label>
                    <p class="form-control-static">{{Auth::user()->name}}</p>
                </div>

                <div class="form-group">
                    <label for="synopsis">菜谱简介</label>
                    <textarea name="synopsis" class="form-control" rows="1" id="synopsis" placeholder="简单描述一下该菜谱"></textarea>
                </div>
                <div class="form-group">
                    <label for="category">菜谱分类</label>
                    <select name="cid" class="form-control" id="category">

                    @foreach($categories as $c)
                            <option value="{{$c->id}}" >{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="level">菜谱难度</label>
                    <select name="lid" class="form-control" id="level">

                        @foreach($levels as $c)
                            <option value="{{$c->id}}" >{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group" id="steps" >
                    <script>
                        function addstep() {
                            //点击 添加 新步骤
                            var stepdiv =  document.getElementById("steps");
                            var newt = document.createElement("textarea");
                            newt.name = 'steps[]';
                            newt.className = "form-control";
                            newt.rows = 2;
                            stepdiv.appendChild(newt);

                        }
                    </script>
                    <label for="addstep">菜谱步骤</label>
                    <p class="form-control-static"> <svg onclick="addstep()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=" bi bi-plus-square" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                            <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg></p>
                    <textarea name="steps[]" class="form-control" rows="2"></textarea>
                </div>

                <button type="submit" class="btn btn-default">创建</button>
            </form>
        </div>
    </nav>
@endsection
