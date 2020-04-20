<div class="tab-pane fade" id="tdo-tab" role="tabpanel" aria-labelledby="tdo-tab">
    <div class="projectItem xs-mb-20">
        <div class="row">
            <div class="col-12 col-lg-4">
                <img src="{{ asset('images/member/products/tdo.jpg') }}" class="img-fluid d-block mx-auto" alt="">
            </div>

            <div class="col-12 col-lg-4">
                <div class="xs-p-10">
                    <p>@lang('member/invest/step1.text')</p>

                    <p>@lang('member/invest/step1.text2')</p>

                    <p>@lang('member/invest/step1.text3')</p>

                    <p class="xs-mb-5">@lang('member/invest/step1.ceeShares') <strong>51</strong></p>

                    <p class="xs-mb-5">@lang('member/invest/step1.reservedShares') <strong>40</strong></p>

                    <p class="xs-mb-5">
                        @lang('member/invest/step1.availableShares')<br>
                        <strong>
                            3 x € 40 000<br>
                            3 x € 45 000<br>
                            3 x € 50 000
                        </strong>
                    </p>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="xs-p-10 calculator">
                    <p>
                        @lang('member/invest/step1.available') &euro; <strong>{{ number_format(405000, 0, ',', ' ') }}</strong>

                        <br>

                        @lang('member/invest/step1.this', ['shares' => 9 - $intSoldTDOShares])
                    </p>

                    <div class="calculator-tdo">
                        <label>@lang('member/invest/step1.shares')</label>

                        <div class="input-group">
                            <input type="number" class="form-control cal_shares" name="tdo[shares]" min="1" max="3" step="1" value="1">

                            <div class="input-group-append">
                                <span class="input-group-text addon-secondary">@lang('member/invest/step1.shares2')</span>
                            </div>
                        </div>

                        <label class="xs-mt-10">@lang('member/invest/step1.investment')</label>

                        <input type="text" class="form-control cal_investment" value="&euro; 40 000" readonly>

                        <label class="xs-mt-10">@lang('member/invest/step1.roi')</label>

                        <input type="text" class="form-control cal_roi" value="&euro; 143 000" readonly>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>