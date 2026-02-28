@extends('layouts.mainsite')

@section('title')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Mind Rewire | Stories</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ version_url('assets/css/common.css') }}">
<link rel="stylesheet" href="{{ version_url('assets/css/common-content/common-content.css') }}">
@endsection


@section('content')
<div class="card">
    <h2>Safety Support</h2>
    <p>If you feel unsafe or overwhelmed:</p>
    <ul>
        <li>Reach out to a trusted person</li>
        <li>Contact a licensed professional</li>
        <li>Use local emergency services if needed</li>
    </ul>
</div>
@endsection
