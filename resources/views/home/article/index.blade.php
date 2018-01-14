@extends('layouts.app')

@section('title')
    文章列表
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel">
                <h2>文章列表页</h2>
            </div>
            @foreach ($data as $list)
            <div class="panel panel-default">
                <h3><a href="/article/{!! $list->id !!}">{!! $list->title !!}</a></h3>
                <div class="panel-heading">
                    {!! $list->subtitle !!}
                </div>

                <div class="panel-body" style="max-width:100%;height:300px;overflow:hidden;">
                    <a href="/article/{!! $list->id !!}">
                        <img src="/upload/{!! $list->cover !!}" style="max-width:100%;">
                    </a>
                </div>
                <div class="panel-footer">
                    {!! $list->created_at !!}
                </div>
            </div>
            @endforeach

            {!! $data->links() !!}
        </div>
    </div>
</div>
@endsection