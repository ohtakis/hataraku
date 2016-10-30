@extends('layouts.test')

@section('style')
<!-- CSS個別読み込みを書くスペース -->
@endsection

@section('content')
	<div>
        <a class="btn btn-block btn-social btn-twitter"  href="auth/login/twitter">
            <span class="fa fa-twitter"></span> Sign in with Twitter
        </a>
        <a class="btn btn-block btn-social btn-facebook" href="auth/login/facebook">
            <span class="fa fa-facebook"></span> Sign in with Facebook
        </a>
    </div>
@endsection

@section('script')
<!-- スクリプト個別読み込みを書くスペース -->
@endsection