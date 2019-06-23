@extends('layouts.app')
@section('content')
<div class="tab">
                    <form method="POST" action="{{ route('login') }}" class="login">
                        @csrf
                        {{-- EMAIL INPUT --}}
                        <div class="mdc-text-field mdc-text-field--outlined email-input" data-mdc-auto-init="MDCTextField">
                            <input class="mdc-text-field__input" type="email" value="{{ old('email') }}" name="email">
                            <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">Email</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="GQ8Pzc">
                                @error('email'){{ $message }}@enderror 
                            </div>
                        {{-- PASSWORD INPUT --}}
                        <div class="mdc-text-field mdc-text-field--outlined" data-mdc-auto-init="MDCTextField">
                            <input class="mdc-text-field__input" type="password" name="password">
                            <div class="mdc-notched-outline">
                            <div class="mdc-notched-outline__leading"></div>
                            <div class="mdc-notched-outline__notch">
                                <label class="mdc-floating-label">Password</label>
                            </div>
                            <div class="mdc-notched-outline__trailing"></div>
                            </div>
                        </div>
                        <div class="GQ8Pzc">
                            @error('password'){{ $message }}@enderror 
                        </div>
                        {{-- REMEMBER --}}
                        <div class="mdc-form-field form-check" data-mdc-auto-init="MDCCheckbox">
                            <div class="mdc-checkbox">
                            <input type="checkbox"
                                    class="mdc-checkbox__native-control"
                                    id="checkbox"
                                    {{ old('remember') ? 'checked' : '' }}
                                    name="remember" 
                                    />
                            <div class="mdc-checkbox__background">
                                <svg class="mdc-checkbox__checkmark"
                                    viewBox="0 0 24 24">
                                <path class="mdc-checkbox__checkmark-path"
                                        fill="none"
                                        d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                </svg>
                                <div class="mdc-checkbox__mixedmark"></div>
                            </div>
                            </div>
                            <label for="checkbox">Remember Me</label>
                        </div> 
                        <div class="form-button">
                        <button class="mdc-button mdc-button--outlined" type="submit">Login</button>
                    </div>
                    </form>
                </div>
@endsection
