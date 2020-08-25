@extends('layouts.app')

@section('content')
<div class="flex">
    <div class="flex-1">
        @include('sidebar-links')
    </div>
    <div class="flex-1"></div>
    <div class="flex-1">
        @include('friends-list')

    </div>
</div>

@endsection
