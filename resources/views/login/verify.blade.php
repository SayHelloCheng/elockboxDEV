@extends('layouts.welcome')
@section('content')
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-inverse" role="navigation">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse"
                            data-target="#main-nav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand scroll-top logo"><b><img src="{{ url('assets/img/logo.png') }}"
                                                                    alt=""></b></a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="mainNav">
                        <li><a href="{{ url('/') }}" class="scroll-link"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a>
                        </li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </header>

    <section id="login" class="page-section secPad">
        <div class="container">
            <div class="row">
                <div class="heading text-center">
                    <!-- Heading -->
                    <br>
                    <br>
                    <h2>Please enter your verification code!</h2>
                    <p>A verification was sent to <b>{{$email['email']}}</b></p>
                </div>
            </div>

            {!! Form::open(['route' => 'vrfy']) !!}

            @if (session()->has('flash_message'))
                <div class="form-group">
                    <p>{{ session()->get('flash_message') }}</p>
                </div>
            @endif
            @if (session()->has('error_message'))
                <div class="form-group alert alert-danger">
                    <p>{{ session()->get('error_message') }}</p>
                </div>
            @endif

            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 center-block">
                    <div class="form-group">
                        <div style="visibility: hidden; display: none">
                            {!! Form::text('user_id', $user_id) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="glyphicon glyphicon-lock"></span>
                        {{ Form::label('Verification code') }}
                        {!! Form::text('vrfycode', null, ['class' => 'form-control', 'placeholder' => 'Enter verification code', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Verify', ['class' => 'btn btn-block btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <!--/.container-->
    </section>
    <!-- Address and Info -->

    <!--/.page-section-->
    <footer style="position: absolute; right: 0; bottom: 0; left: 0; background-color: #E4E4E4">
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        Copyright 2016 Living Advantage, Inc. All Rights Reserved.
                    </div>
                </div>
                <!-- / .row -->
            </div>
        </section>
    </footer>


    {{--{!! Form::open(['route' => 'generate']) !!}--}}
    {{--@if (session()->has('flash_message'))--}}
    {{--<div class="form-group">--}}
    {{--<p>{{ session()->get('flash_message') }}</p>--}}
    {{--</div>--}}
    {{--@endif--}}
    {{--@if (session()->has('error_message'))--}}
    {{--<div class="form-group">--}}
    {{--<p>{{ session()->get('error_message') }}</p>--}}
    {{--</div>--}}
    {{--@endif--}}
    {{--<div class="form-group">--}}
    {{--{!! Form::text('email', null, ['placeholder' => 'Email', 'required' => 'required']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--{!! Form::password('password', ['placeholder' => 'Password', 'required' => 'required']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
    {{--{!! Form::submit('Log in') !!}--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}

@endsection


{{--{!! Form::open(['route' => 'vrfy']) !!}--}}
{{--@if (session()->has('error_message'))--}}
{{--<div class="form-group">--}}
{{--<p>{{ session()->get('error_message') }}</p>--}}
{{--</div>--}}
{{--@endif--}}
{{--<div style="visibility: hidden; display: none">--}}
{{--{!! Form::text('user_id', $user_id) !!}--}}
{{--</div>--}}
{{--{!! Form::text('vrfycode', null, ['placeholder' => 'Enter verification code', 'required' => 'required']) !!}--}}
{{--{!! Form::submit('Verify') !!}--}}
{{--{!! Form::close() !!}--}}






