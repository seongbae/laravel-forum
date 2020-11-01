@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($topics as $thread)
                        <a href="{{ $thread->path() }}" style="font-size:1.2em;color:#22292f;">
                            {{ $thread->title }}
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
