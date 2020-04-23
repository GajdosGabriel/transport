@extends('layouts.app')

@section('recaptcha')
    {!! htmlScriptTagJsApi([ 'action' => 'homepage']) !!}
@endsection
@section('navigation') @include('layouts.nav-invest') @endsection

@section('content')

    <div  id="order" class="container-fluid shadow" style="background: #d8e3ef; margin-top: -16px">
        <div class="container pt-5">

                 @include('video')

            <div class="col-12 py-4">
                <div class="">
                    <h2 class="">{{ __('landing.invest-title') }}</h2>
                        <p>{{ __('landing.invest-text1') }}</p>
                        <p>{{ __('landing.invest-text2') }}</p>

                        <p>{{ __('landing.invest-text3') }}</p>
                        <p class="">{{ __('landing.invest-text4') }}</p>
                </div>
            </div>

        </div>
    </div>

    {{--    NEWS    --}}
    @include('news')



    <form method="POST" action="{{ route('order.store') }}">
        @csrf @method('POST')
    {{--  HOW TO ORDER --}}
    <div  id="order" class="container-fluid shadow pt-3" style="background: #d8e3ef; margin-top: -23px">
        <div class="container">
                <h2 data-aos="zoom-in" class="display-5 text-center pt-3">{{ __('landing.order-title') }}</h2>
            <div class="row">
                <div class="offset-md-2">
{{--                <div class="">--}}
{{--                    <p>{{ __('landing.order-step1') }}</p>--}}
{{--                    <p>{{ __('landing.order-step2') }} <a target="_blank" href="https://support.docusign.com/articles/How-do-I-sign-a-DocuSign-document-Basic-Signing">DocuSign</a></p>--}}
{{--                    <p>{{ __('landing.order-step3') }}</p>--}}
{{--                </div>--}}
            </div>
        </div>

            {{-- Caltulartor --}}
            @include('calculator')

    </div>
    </div>

    @include('form.order_form')

    </form>

@endsection


