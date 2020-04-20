<div class="tab-pane fade show calculator calculator-pr" id="pr-tab" role="tabpanel" aria-labelledby="pr-tab">
    <input type="hidden" class="cal_price" value="5000">

    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="form-group">
                <label for="pr_number" class="col-form-label">@lang('member/invest/pr.number')</label>

                <input id="pr_number" type="number" class="form-control cal_number{{ $errors->has('pr.number') ? ' is-invalid' : '' }}" name="pr[number]" value="{{ old('pr.number') ?? 1 }}" min="1" step="1">
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label for="" class="col-form-label">@lang('member/invest/pr.investment')</label>

                        <input type="text" class="form-control cal_investment" value="&euro; 5 000" readonly>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label for="" class="col-form-label">@lang('member/invest/pr.interest')</label>

                        <input type="text" class="form-control cal_profit" value="&euro; 1 000" readonly>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="form-group">
                        <label for="" class="col-form-label">@lang('member/invest/pr.quarterly')</label>

                        <input type="text" class="form-control cal_quarterly" value="&euro; 125,00" readonly>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <label for="">@lang('member/invest/pr.duration')</label>

            <div class="custom-control custom-radio xs-mb-10">
                <input class="custom-control-input cal_duration" type="radio" name="pr[duration]" id="pr1" value="2" checked>
                <label class="custom-control-label" for="pr1">
                    @lang('member/invest/pr.2')
                </label>
            </div>

            <div class="custom-control custom-radio xs-mb-10">
                <input class="custom-control-input cal_duration" type="radio" name="pr[duration]" id="pr2" value="3">
                <label class="custom-control-label" for="pr2">
                    @lang('member/invest/pr.3')
                </label>
            </div>

            <div class="custom-control custom-radio">
                <input class="custom-control-input cal_duration" type="radio" name="pr[duration]" id="pr3" value="4">
                <label class="custom-control-label" for="pr3">
                    @lang('member/invest/pr.4')
                </label>
            </div>
        </div>
    </div>

    <hr class="part primary">

    <p class="lead text-center">@lang('member/invest/pr.pooled')</p>

    <div class="row projects">
        <div class="col-12 col-md-6">
            <div id="hpFlldp" class="project">
                <header class="header">
                    <h5 class="text-center">Šírava Park Boulevard</h5>

                    <h3 class="text-center">@lang('member/invest/pr.roi')</h3>
                </header>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div id="hpFlldp2" class="project">
                <header class="header">
                    <h5 class="text-center">Šírava Park Glamping</h5>

                    <h3 class="text-center">@lang('member/invest/pr.roi')</h3>
                </header>
            </div>
        </div>
    </div>
</div>