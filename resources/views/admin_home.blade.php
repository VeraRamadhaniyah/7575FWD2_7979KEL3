@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard Admin</div>

                <div class="panel-body">
                    Assalammualaikum : <b>{{ Auth::user()->name }}</b><br>Anda login sebagai admin.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
