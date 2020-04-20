@extends('layouts.app')

@section('content')

    <div  id="order" class="container-fluid shadow" style="background: #d8e3ef">
        <div class="container">
            <div class="row align-items-center">

                {{--  Part B--}}
                <div class="col-lg-6">
                    <div class="py-5">
                        <h2 class="display-5">Video presentation</h2>
                     @include('video')

                    </div>
                </div>
                {{--  Part A--}}
                <div class="col-lg-6">
                    <div class="py-5">
                        <h2 class="display-5">{{ __('landing.invest-title') }}</h2>
                        <p>{{ __('landing.invest-text1') }}</p>
                        <p>{{ __('landing.invest-text2') }}</p>
                        <p>{{ __('landing.invest-text3') }}</p>
                        <p>{{ __('landing.invest-text4') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--  HOW TO ORDER --}}
    <div class="container shadow">
        <div class="row align-items-center">
            <div class="col">
                <div class="py-5">
                    <h2 data-aos="zoom-in" class="display-5 text-center mb-4">{{ __('landing.order-title') }}</h2>
                    <p>{{ __('landing.order-step1') }}</p>
                    <p>{{ __('landing.order-step2') }} <a href="https://support.docusign.com/articles/How-do-I-sign-a-DocuSign-document-Basic-Signing">DocuSign</a></p>
                    <p>{{ __('landing.order-step3') }}</p>
                    <p class="text-center mt-5"><a class="btn btn-primary btn-lg" href="{{ route('registration') }}" role="button">{{ __('landing.heading-button') }}</a></p>
                </div>
            </div>
        </div>
    </div>



@endsection
