@extends('layouts.master')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __('Login') }}</div>

                <div class="card-body">
                    
                    <form method="POST" action='{{ route('userLogin') }}' aria-label="{{ __('Login') }}"></form>
                    
                    <form method="POST" action="{{ route('userLogin') }}" aria-label="{{ __('Login') }}">
                    
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
