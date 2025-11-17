@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @role('admin')
                        <h3>Welcome, Admin!</h3>
                        {{ __('You are logged in!') }}
                    @endrole
                    @role('dosen')
                        <h3>Welcome, Dosen!</h3>
                        {{ __('You are logged in!') }}
                    @endrole
                    @role('mahasiswa')
                        <h3>Welcome, Mahasiswa!</h3>
                        {{ __('You are logged in!') }}
                    @endrole
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
