@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center"><span>HOME PAGE</span></h1>

    {{-- edit your home page here, the main css is in /public/css. It is imported in app.blade.php  --}}


    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
