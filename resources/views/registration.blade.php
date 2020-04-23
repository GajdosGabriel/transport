{{--@extends('layouts.app')--}}


{{--@section('navigation') @include('layouts.nav-invest') @endsection--}}


@include('modals.prTacModal')
<div  class="container align-items-center">
            <div class="offset-md-2 col-md-8 p-3">


                    <div class="card bg_secondary xs-mt-20 xs-mb-20 lg-mt-50 lg-mb-50">
                    <div class="card-body" >
                        @include('form.errorList')
{{--                        <div class="row">--}}
                            <div class="col-xs-12 col-lg-126">
                                @include('form.personal')
                            </div>

{{--                            <div class="col-xs-12 col-lg-6">--}}
{{--                                @include('form.company')--}}

{{--                                @include('form.joint')--}}
{{--                            </div>--}}

{{--                        </div>--}}
                    </div>
                    <div class="col-xs-12 col-lg-12 mb-4">
                        <div class="card bg_secondary xs-mt-20 lg-mt-50">
                            <div class="card-body"  style="background: #d8e3ef">
                                <div class="row d-flex align-items-center">
                                    <div class="col-12 col-lg-9 xs-pt-15">
                                        <div class="custom-control custom-checkbox{{ $errors->has('agree') ? ' is-invalid' : '' }}">
                                            <input class="custom-control-input" type="checkbox" id="agree" name="agree" required>

                                            <label class="custom-control-label" for="agree">
                                               @lang('step1.read')
                                                <a href="" style="margin-top: 15px" data-toggle="modal" data-target="#prTacModal">@lang('contracts/pr.terms')</a>
                                                <a id="tdo_modal" class="d-none" href="" data-toggle="modal" data-target="#mandateModal">@lang('step1.tdoIM')</a>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-3">
                                        <button id="submitButton" type="submit" class="btn btn-primary btn-block">@lang('step1.nextStep')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>





{{--@section('script')--}}
{{--    <script type="text/javascript" src="{{ asset('js/step1.js') }}"></script>--}}
{{--@endsection--}}
