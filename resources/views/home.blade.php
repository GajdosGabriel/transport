@extends('layouts.app')

@section('content')

{{--    heading--}}
    <div class="container-fluid navBackground" style="color: wheat">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="py-5">
                        <h1 class="display-5">{{  __('landing.heading-title') }}</h1>
                        <p>{{ __('landing.heading-text') }}</p>
{{--                        <p data-aos="fade-down-left" class="text-center"><a class="btn btn-primary btn-lg" href="#" role="button">{{ __('landing.heading-button') }}</a></p>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


{{--    Become a business customer with .... Transport--}}
<div id="customer" class="container shadow">
    <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
            <div data-aos="fade-down-left" class="py-5">
                <img class="img-fluid img-thumbnail" src="{{ asset('images/transport-cars.PNG') }}" alt="">
            </div>
        </div>
        <div class="col-lg-6 order-lg-1">
            <div class="py-5">
                <h2 data-aos="fade-down-left" class="display-5">{{ __('landing.business-title') }}</h2>
                <p>{{ __('landing.business-text1') }}</p>
                <p>{{ __('landing.business-text2') }}</p>
            </div>
        </div>
    </div>
</div>




{{--    Working at .... Transport--}}
    <div id="delivery" class="container-fluid shadow" style="background: #d8e3ef">
        <div class="container">
            <div class="row align-items-center">
            <div data-aos="fade-down-right" class="col-lg-6">
                <div class="py-5">
                    <img class="img-fluid img-thumbnail" src="{{ asset('images/delivery-man.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="display-5">{{ __('landing.transport-title') }}</h2>
                    <p>{{ __('landing.transport-text1') }}</p>
                    <p>{{ __('landing.transport-text2') }}</p>
                </div>
            </div>
        </div>
        </div>
    </div>

{{--    Transport daily groceries to home delivery services--}}
    <div id="working" class="container shadow">
        <div class="row align-items-center">
            <div data-aos="fade-left" class="col-lg-6 order-lg-2">
                <div class="py-5">
                     <img class="img-fluid img-thumbnail" src="{{ asset('images/delivery-man2.jpg') }}" alt="">
                </div>
            </div>
            <div data-aos="fade-right" class="col-lg-6 order-lg-1">
                <div class="py-5">
                    <h2 class="display-5">{{ __('landing.working-title') }}</h2>
                    <p>{{ __('landing.working-text1') }}</p>
                    <p>{{ __('landing.working-text2') }}</p>
                </div>
            </div>
        </div>
    </div>


    {{--    niwo Certificate--}}
    <div id="certification" class="container-fluid" style="background: #d8e3ef">
        <div class="container">
            <div class="row align-items-center">
                <div  data-aos="zoom-in"  class="col-lg-6">
                    <div class="py-5 text-center">
                        <img class="img-fluid img-thumbnail" src="{{ asset('images/logo-niwo.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="py-5">
                        <h2 class="display-5">{{ __('landing.niwo-title') }}</h2>
                        <p>{{ __('landing.niwo-text1') }}</p>
                        <p>{{ __('landing.niwo-text2') }}</p>
                        <p>{{ __('landing.niwo-text3') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    IRU Certificate--}}
    <div class="container shadow">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="py-5">
                    <h2 class="display-5">{{ __('landing.uri-title') }}</h2>
                    <p>{{ __('landing.uri-text1') }}</p>
                    <p>{{ __('landing.uri-text2') }}</p>
                    <p>{{ __('landing.uri-text3') }}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div data-aos="zoom-in" class="py-5 text-center">
                    <img class="img-fluid img-thumbnail" src="{{ asset('images/logo-iru.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </div>


{{--<p class="text-center my-5 "><a class="btn btn-primary btn-lg" href="{{ route('invest') }}" role="button">{{ __('landing.heading-button') }}</a></p>--}}




@endsection
