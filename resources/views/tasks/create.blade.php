@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ trans('tasks.create') }}</div>

                    <div class="panel-body">
                        <form method="POST" action="{{ url('tasks') }}">
                            {{ csrf_field() }}
                            {{ trans('tasks.name') }}:&nbsp;<input type="text" name="name" /><br />
                            <input type="submit" value="{{ trans('tasks.submit') }}" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection