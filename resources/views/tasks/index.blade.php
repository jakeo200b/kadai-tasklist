@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    @if(\Auth::check())
        @if(count($tasks) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>状況</th>
                        <th>タスク</th>
                    </tr>
                    
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{!! link_to_route('tasks.show', $task->id ,['id' => $task->id]) !!}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        {{$tasks->links('pagination::bootstrap-4')}}
        {!! link_to_route('tasks.create','新規タスクの登録',[],['class' => 'btn btn-primary']) !!}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasks</h1>
                {!! link_to_route('signup.get','Sign up now!',[],['class'=>'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection