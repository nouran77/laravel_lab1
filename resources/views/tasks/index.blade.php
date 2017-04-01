@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('tasks.title') }}</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-info">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="{{ url('tasks/create') }}">{{ trans('tasks.create') }}</a><br/>
                        @foreach ($tasks as $task)
                            <table>
                                <tr>
                                    <td><a href="{{ url('tasks/'.$task->id) }}">{{ $task->name }}</a></td>
                                    <td>&nbsp;-&nbsp;</td>
                                    <td><a href="{{ url('tasks/'.$task->id.'/edit') }}">{{ trans('tasks.update') }}</a>
                                    </td>
                                    <td>&nbsp;-&nbsp;</td>
                                    <td>
                                        <form method="POST" action="{{ url('tasks/'.$task->id) }}">
                                            <input name="_method" value="DELETE" hidden/>
                                            {{ csrf_field() }}
                                            <input type='submit' value="{{ trans('tasks.delete') }}"/>

                                        </form>
                                    </td>
                                </tr>
                            </table>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection