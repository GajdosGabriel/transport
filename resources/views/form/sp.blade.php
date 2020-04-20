<div class="tab-pane fade{{ (!in_array(Auth::user()->id, config('cee.pr_clients'))) ? ' show active' : '' }}" id="sp-tab" role="tabpanel" aria-labelledby="sp-tab">
    <div class="projectItem xs-mb-20">
        <div class="row">
            <div class="col-12 col-lg-4">
                <img src="{{ asset('images/member/products/sp.jpg') }}" class="img-fluid d-block mx-auto" alt="">
            </div>

            <div class="col-12 col-lg-4">
                <div class="xs-p-10">
{{--                    <p>@lang('member/how.silent_partnership0')</p>--}}
                    <p>@lang('member/invest/step1.description1')</p>
                    <p>@lang('member/invest/step1.description2')</p>
                    <p>@lang('member/invest/step1.description3')</p>
                    <p>@lang('member/invest/step1.description4')</p>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="xs-p-10 calculator">
                    <p>
                        @lang('member/invest/step1.available') &euro; <strong>{{ number_format(4000000, 0, ',', ' ') }}</strong>

                        <br>

                        @lang('member/invest/step1.this', ['shares' => 27 - $intSoldTDOShares])
                    </p>

                    <div class="calculator-sp">
                        <label>@lang('member/invest/step1.shares')</label>

                        <div class="input-group">
                            <input type="number" class="form-control cal_shares" name="sp[shares]" min="0.10" max="6" step="0.10" value="0.10">

                            {{--// pred akciou--}}
                            {{--<input type="number" class="form-control cal_shares" name="sp[shares]" min="0.025" max="3" step="0.025" value="0.025">--}}

                            <div class="input-group-append">
                                <span class="input-group-text addon-secondary">@lang('member/invest/step1.shares2')</span>
                            </div>
                        </div>

                        <label class="xs-mt-10">@lang('member/invest/step1.investment')</label>

                        <input type="text" class="form-control cal_investment" value="&euro; 15 000" readonly>

                        {{--// pred akciou--}}
                        {{--<input type="text" class="form-control cal_investment" value="&euro; 1 000" readonly>--}}

                        {{--Mnou pridaný pre SP akcia--}}
                        <input type="hidden" name="per_share" value="100000">


                        {{--Ročný výnos--}}
                        <label class="xs-mt-10">@lang('member/invest/step1.yearly_dividend')</label>
                        <input type="text" class="form-control cal_yearly_dividend" value="&euro; 3 750" readonly>


                        <label class="xs-mt-10">@lang('member/invest/step1.roi')</label>

                        <input type="text" class="form-control cal_roi" value="&euro; 90 000" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>