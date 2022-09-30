@extends('navbar')

@section('content')

<div class="container m-5">
    <div class="row">
        <div class="col-sm-4">
            @if (session('message'))
                <div class="alert alert-success">{{session('message')}}</div>
                @endif
                <livewire:seafoods.create/>
        </div>
        <div class="col-lg-8">
            <livewire:seafoods.index/>
        </div>
    </div>
</div>

@endsection