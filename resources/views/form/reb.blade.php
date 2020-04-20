<div class="tab-pane fade calculator" id="reb-tab" role="tabpanel" aria-labelledby="reb-tab">
    <div class="row">
        <div class="col-12 col-lg-8">
            @foreach($arrProjects->where('category', 'reb') as $objProject)
                @component('components/member/projectMediaItem', ['objProject' => $objProject])
                @endcomponent
            @endforeach
        </div>

        <div class="col-12 col-lg-4">
            <div class="form-group">
                <label for="" class="col-form-label">Your investment:</label>

                <input type="text" class="form-control cal_investment" value="&euro; 100 000" readonly>
            </div>

            <div class="form-group">
                <label for="" class="col-form-label">Your total interest:</label>

                <input type="text" class="form-control cal_profit" value="&euro; 16 000" readonly>
            </div>

            <div class="form-group">
                <label for="" class="col-form-label">Yearly payout:</label>

                <input type="text" class="form-control cal_yearly" value="&euro; 8 000" readonly>
            </div>
        </div>
    </div>
</div>