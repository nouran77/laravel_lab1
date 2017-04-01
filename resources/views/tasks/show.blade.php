@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $task->name }}</div>

                    <div class="panel-body">
                        <table>
                            <tr>
                                <td><a href="{{ url('tasks/edit/'.$task->id) }}">{{ trans('tasks.update') }}</a>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection