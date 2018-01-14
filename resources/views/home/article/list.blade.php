@extends('layouts.app')

@section('title')
    {!! $data->title !!}
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <h3><a href="/article/{!! $data->id !!}">{!! $data->title !!}</a></h3>
                <div class="panel-heading">
                    {!! $data->subtitle !!}
                </div>
                <div class="panel-body entry-content">
                    <div class="markdown">
                        {!! $data->content !!}
                    </div>
                </div>
                <div class="panel-footer">
                    创建时间： {!! $data->created_at !!}
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div id="category-menu" style="padding:15px;background:#ffffff;margin-top:150px;">
                <div id="category"><b>文章目录</b><br/></div>
            </div>
        </div>
    </div>
    @section('js')
    <script type="text/javascript">
        $(document).ready(function(){
            $(".entry-content h2,.entry-content h3,.entry-content h4,.entry-content h5,.entry-content h6").each(function(i,item){
                var tag = $(item).get(0).localName;

                $(item).attr("id","wow"+i);  // 添加标签属性，增加锚点
                $("#category").append('<a class="new'+tag+'" href="#wow'+i+'">'+$(this).text()+'</a></br>');
                $(".newh2").css("margin-left",0);
                $(".newh3").css("margin-left",20);
                $(".newh4").css("margin-left",40);
                $(".newh5").css("margin-left",60);
                $(".newh6").css("margin-left",80);
            });

        });
    </script>
    @endsection
</div>
@endsection