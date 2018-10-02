@extends('layouts.admin')

@section('content')
<div class="container" style="text-align: center;">
    <div class="row">
        <div class="col-md-12">
        @include('flash::message')
        <div class="panel panel-default alert">
            <a href="{{ route('admin.logout') }}"
            >退出登录</a>
        </div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                投票管理
            </div>
            <div class="panel-body">
                <a href="{{ route('admin.vote.create') }}">
                    <button class="btn btn-default">新建投票</button>
                </a>
                <br><br>
                <table class="table table-bordered table-hover" 
                    id="votelist">
                    <thead>
                    <tr>
                        <th>项目ID</th>
                        <th>项目名称</th>
                        <th>开始时间</th>
                        <th>截止时间</th>
                        <th>创建时间</th>
                        <th>操作</th>
                    </tr>
                    @if(count($votelist) > 0)
                    @foreach($votelist as $k => $v)
                    <tr>
                        <td>
                            {{ $v['id'] }}
                        </td>
                        <td>
                            {{ $v['name'] }}
                        </td>
                        <td>
                            {{ date("Y-m-d H:i:s",$v['start']) }}
                        </td>
                        <td>
                            {{ date("Y-m-d H:i:s",$v['end']) }}
                        </td>
                        <td>
                            {{ date("Y-m-d H:i:s",$v['created_at']) }}
                        </td>
                        <td><a href="{{ route('admin.vote.show', $v['id'])}}">
                        详情</a></td>
                    </tr>
                    @endforeach
                    @endif
                    </thead>
                </table>
                {{ $votelist->links() }}
            </div>
        </div>
    </div>

    </div>
</div>
@endsection
