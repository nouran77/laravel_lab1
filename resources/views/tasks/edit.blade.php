@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('tasks.update') }}</div>

                    <div class="panel-body">
                        <form method="POST" action="{{ url('tasks/'.$task->id) }}" >
                            {{ csrf_field() }}
                            <input name="_method" value="PUT" hidden/>
                            {{ trans('tasks.name') }}:&nbsp;<input type="text" name="name" value="{{ $task->name }}" /><br />
                            <input type="submit" value="{{ trans('tasks.submit') }}" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection