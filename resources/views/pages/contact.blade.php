@extends('master')

@section('body')
    <h1>Contact Page</h1>
            @if(!empty($email))
                {{$email}}
            @else
            No email address given
            @endif
@endsection

{{--<!DOCTYPE html>--}}
{{--<html>--}}
{{--<head>--}}
{{--    <title>About</title>--}}
{{--    <meta charset="UTF-8">--}}
{{--</head>--}}

{{--<body>--}}
{{--    <h1>Contact Page</h1>--}}
{{--        @if(!empty($email))--}}
{{--            {{$email}}--}}
{{--        @else--}}
{{--        No email address given--}}
{{--        @endif--}}
{{--</body>--}}
{{--</html>--}}
