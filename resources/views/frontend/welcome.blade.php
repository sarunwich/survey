@extends('layouts.frontendlayout')
  
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
                    <div class="container">
                    {{QrCode::size(200)->generate('https://sci.tsu.ac.th');}}
                    </div>
                    <div class="codesource-link">
                        <a href="https://sci.tsu.ac.th">https://sci.tsu.ac.th</a>
                      </div>
                    welcome.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection