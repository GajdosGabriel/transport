{{--CALCULATOR PR--}}
{{--<calculator  inline-template>--}}
{{--    <div class="row">--}}
{{--        <div class="col-lg-8 offset-lg-2 mb-5">--}}
{{--            <div class="xs-p-10 calculator">--}}
{{--                <div class="tab-pane fade show calculator calculator-pr" id="pr-tab" role="tabpanel" aria-labelledby="pr-tab">--}}
{{--                    <h4 class="text-center">@lang('pr.duration')</h4>--}}

{{--                    <div class="row">--}}
{{--                        <div class="col-lg-8">--}}
{{--                            <div class="form-group">--}}
{{--                                <label for="pr_number" class="col-form-label">@lang('pr.number')</label>--}}
{{--                                <input type="number" class="form-control cal_number" v-model="invest" min="500" step="500">--}}
{{--                            </div>--}}

{{--                            <div class="row">--}}
{{--                                <div class="col-10 col-lg-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="" class="col-form-label">@lang('pr.interest')</label>--}}

{{--                                        <input type="text" class="form-control cal_profit" v-model="cal_interest" readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="col-10 col-lg-4">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label for="" class="col-form-label">@lang('pr.quarterly')</label>--}}

{{--                                        <input type="text" class="form-control cal_quarterly" v-model="cal_month" readonly>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <hr class="part primary">--}}
{{--                    <p class="lead text-center">@lang('pr.pooled')</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</calculator>--}}

{{--CALCULATOR PR--}}
<div>
    <div class="row">
        <div class="col-lg-8 offset-lg-2 mb-5">
            <div class="xs-p-10 calculator">
                <div class="tab-pane fade show calculator calculator-pr" id="pr-tab" role="tabpanel" aria-labelledby="pr-tab">
                    <input type="hidden" class="cal_price" value="5000">

                    <h4 class="text-center">@lang('pr.duration')</h4>

                    <div class="custom-control custom-radio xs-mb-10">
                        <input class="custom-control-input cal_duration" type="hidden" name="pr[duration]" id="pr1" value="2" checked>
                                                <label class="custom-control-label" for="pr1">
                                                    @lang('pr.2')
                                                </label>
                    </div>


                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <label for="pr_number" class="col-form-label">@lang('pr.number')</label>

                                <input id="pr_number" type="number" class="form-control cal_number{{ $errors->has('pr.number') ? ' is-invalid' : '' }}" name="pr[number]" value="{{ old('pr.number') ?? 1 }}" min="1" step="1">
                            </div>

                            <div class="row">
                                <div class="col-10 col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">@lang('pr.investment')</label>

                                        <input type="text" class="form-control cal_investment" value="£ 500" readonly>
                                    </div>
                                </div>

                                <div class="col-10 col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">@lang('pr.interest')</label>

                                        <input type="text" class="form-control cal_profit" value="£ 125" readonly>
                                    </div>
                                </div>

                                <div class="col-10 col-lg-4">
                                    <div class="form-group">
                                        <label for="" class="col-form-label">@lang('pr.quarterly')</label>

                                        <input type="text" class="form-control cal_quarterly" value="£ 20.84" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="part primary">
                                        <p class="lead text-center">@lang('pr.pooled')</p>
                </div>
            </div>
        </div>
    </div>
</div>



