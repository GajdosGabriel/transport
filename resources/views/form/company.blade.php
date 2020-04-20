<div>
    <div class="custom-control custom-checkbox xs-mb-20 md-mb-30">
        <input type="checkbox" id="company" name="company[details]" class="custom-control-input">
        <label for="company" class="custom-control-label"><span class="h3">@lang('company')</span></label>
    </div>

    <div class="content opacity">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="form-group{{ $errors->has('company.name') ? ' is-invalid' : '' }}">
                    <label for="company_name">@lang('form.company')</label>

                    <input id="company_name" type="text" class="form-control" name="company[name]"
                           value="{{ old('company.name') }}" maxlength="100" disabled>
                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <div class="form-group{{ $errors->has('company.id_number') ? ' is-invalid' : '' }}">
                    <label for="company_id_number">@lang('form.companyID')</label>

                    <input id="company_id_number" type="text" class="form-control"
                           name="company[id_number]" value="{{ old('company.id_number') }}" maxlength="50" disabled>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="form-group{{ $errors->has('company.street') ? ' is-invalid' : '' }}">
                    <label for="company_street">@lang('form.street')</label>

                    <input id="company_street" type="text" class="form-control" name="company[street]"
                           value="{{ old('company.street') }}" maxlength="30" disabled>
                </div>
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="form-group{{ $errors->has('company.zip') ? ' is-invalid' : '' }}">
                    <label for="company_zip">@lang('form.zip')</label>

                    <input id="company_zip" type="text" class="form-control" name="company[zip]"
                           value="{{ old('company.zip') }}" maxlength="20" disabled>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="form-group{{ $errors->has('company.city') ? ' is-invalid' : '' }}">
                    <label for="company_city">@lang('form.city')</label>

                    <input id="company_city" type="text" class="form-control" name="company[city]"
                           value="{{ old('company.city') }}" maxlength="50" disabled>
                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <div class="form-group{{ $errors->has('company.region') ? ' is-invalid' : '' }}">
                    <label for="company_region">@lang('form.region')</label>

                    <input id="company_region" type="text" class="form-control" name="company[region]"
                           value="{{ old('company.region') }}" maxlength="50" disabled>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="company_country">@lang('form.country')</label>

            <select id="company_country" name="company[country]" class="form-control" disabled>
                <option value="">@lang('form.country')</option>
                {{ \App\Classes\Country::countries(old('company.country')) }}
            </select>
        </div>
    </div>
</div>