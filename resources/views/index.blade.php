@extends('layouts.app')

{{-- @section('title', 'Home') --}}

@section('content')

<div id="main">
  <App></App>
</div>

@endsection

@section('extrascript')

<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>

@endsection