@extends('layouts.app')

@section('content')
<div id="app">
<print-sellorder :sellorder='{{$sellorder}}'><print-sellorder/>
</div>

@endsection
