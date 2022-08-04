{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('HomePage') }}</div>
                <div class="card-body">
                    You are logged in! Welcome to Resource Management System. Together We Love & Care!
                    @if(session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    @endif
                    @can('isAdmin')
                    <div class="btn btn-primary btn-lg" onclick="location.href='{{ url('profile') }}'">
                        Admin Access
                    </div>
                    @elsecan('isUser')
                    <div class="btn btn-success btn-lg" onclick="location.href='{{ url('profile') }}'">
                         User Profile
                    </div>
                    @endcan
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
-}}