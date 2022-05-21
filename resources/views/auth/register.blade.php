@extends('layouts.app')

@section('content')
<div class="container">
    <div class="authentication-wrapper authentication-basic container-p-y" style="display:flex;flex-direction:column">        
        <span class="app-brand-text demo text-body fw-bolder text-white mb-3"><img src="/assets/img/logo/logo.png" style="width:15vw"></span>
        <div class="card" style="background-color: #333333">
            <div class="card-body">
                <h3 class="mb-2 mt-2 text-white" style="text-align:center">Register</h3>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label text-white">{{ __('Name') }}</label>
                        <input 
                            id="name" 
                            type="text" 
                            class="form-control @error('name') is-invalid @enderror" 
                            name="name" 
                            value="{{ old('name') }}" 
                            required autocomplete="name" 
                            placeholder="Enter your fullname"
                            style="background-color: #424242;border: none;color:#ffffff"
                            autofocus
                        />

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>             

                    <div class="mb-3">
                        <label for="email" class="form-label text-white">{{ __('E-Mail Address') }}</label>
                        <input 
                            id="email" 
                            type="email" 
                            class="form-control @error('email') is-invalid @enderror" 
                            name="email" 
                            value="{{ old('email') }}" 
                            required autocomplete="email" 
                            placeholder="Enter your email"
                            style="background-color: #424242;border: none;color:#ffffff"
                            autofocus                            
                        />

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label text-white" for="password">{{ __('Password') }}</label>
                        </div> 
                        <div class="input-group input-group-merge">                   
                            <input 
                                id="password" 
                                type="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                name="password" 
                                required autocomplete="current-password"
                                style="background-color: #424242;border: none"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                            />     
                            <span class="input-group-text cursor-pointer" style="background-color: #424242;border: none"><i class="bx bx-hide"></i></span>                               
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-3 form-password-toggle">
                        <div class="d-flex justify-content-between">
                            <label class="form-label text-white" for="password">{{ __('Confirm Password') }}</label>
                        </div> 
                        <div class="input-group input-group-merge">                   
                            <input 
                                id="password-confirm" 
                                type="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                name="password_confirmation" 
                                required autocomplete="new-password"
                                style="background-color: #424242;border: none"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                            />     
                            <span class="input-group-text cursor-pointer" style="background-color: #424242;border: none"><i class="bx bx-hide"></i></span>                               
                        </div>
                    </div>     
                    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    <div class="mb-3">
                        <button class="btn btn-primary d-grid w-100" type="submit" style="background-color:#FFD74B;border: none;color: #424242">
                            {{ __('Register') }}   
                        </button>                                                 
                    </div>
                </form>
                <div class="mb-3">                         
                    <a class="nav-link btn btn-outline-primary mx-3" href="{{ route('movies.index') }}">Go To Home</a>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection
