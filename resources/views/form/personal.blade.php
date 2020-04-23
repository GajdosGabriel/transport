<h3 class="xs-mb-20 md-mb-30 font-lato">@lang('step1.personal')</h3>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="form-group required{{ $errors->has('name') ? ' is-invalid' : '' }}">
            <label for="name">@lang('form.name')</label>

            <input id="name" type="text" class="form-control" name="name"
                   value="{{ old('name') }}"
                   maxlength="30" required>
        </div>
    </div>

    <div class="col-xs-12 col-md-6">
        <div class="form-group required{{ $errors->has('surname') ? ' is-invalid' : '' }}">
            <label for="surname">@lang('form.surname')</label>

            <input id="surname" type="text" class="form-control" name="surname"
                   value="{{ old('surname') }}"
                   maxlength="50" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-8">
        <div class="form-group required{{ $errors->has('street') ? ' is-invalid' : '' }}">
            <label for="street">@lang('form.street')</label>

            <input id="street" type="text" class="form-control" name="street" value="{{ old('street') }}" maxlength="30" required>
        </div>
    </div>

    <div class="col-xs-12 col-md-4">
        <div class="form-group required{{ $errors->has('zip') ? ' is-invalid' : '' }}">
            <label for="zip">@lang('form.zip')</label>

            <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}" maxlength="20" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="form-group required{{ $errors->has('city') ? ' is-invalid' : '' }}">
            <label for="city">@lang('form.city')</label>

            <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" maxlength="50" required>
        </div>
    </div>

    <div class="col-xs-12 col-md-6">
        <div class="form-group required{{ $errors->has('region') ? ' is-invalid' : '' }}">
            <label for="region">@lang('form.region')</label>

            <input id="region" type="text" class="form-control" name="region" value="{{ old('region') }}" maxlength="50" required>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="form-group required">
            <label for="country">@lang('form.country')</label>

            <select id="country" name="country" class="form-control" required>
                <option value="">@lang('form.country')</option>
                {{ \App\Classes\Country::countries(old('country')) }}
            </select>
        </div>
    </div>

    <div class="col-xs-12 col-md-6">
        <div class="form-group required">
            <label for="nationality">@lang('form.nationality')</label>

            <select id="nationality" name="nationality" class="form-control" required>
                <option value="">@lang('form.nationality')</option>
                {{ \App\Classes\Country::countries(old('nationality')) }}
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-md-6">
        <div class="form-group required{{ $errors->has('email') ? ' is-invalid' : '' }}">
            <label for="email">E-mail</label>

            <input id="email" type="email" class="form-control" name="email"
                   value="{{ old('email') }}"
                   maxlength="70" required>
        </div>
    </div>

    <div class="col-xs-12 col-md-6">
        <div class="form-group required{{ $errors->has('government_id') ? ' is-invalid' : '' }}">
            <label for="government_id">@lang('form.govID')</label>

            <input id="government_id" type="text" class="form-control"
                   name="government_id" value="{{ old('government_id') }}" maxlength="50" required>
        </div>
    </div>
</div>

<div class="form-group required{{ $errors->has('phone') ? ' is-invalid' : '' }}">
    <label for="phone">@lang('form.phone')</label>

    <div class="input-group">
        <span class="input-group-btn select">
            <select id="phone_code" name="phone_code" class="form-control" required>
                <option value="">@lang('form.countryCode')</option>
                {{ \App\Classes\Country::phoneCodes(old('phone_code') ) }}
            </select>
        </span>

        <input id="phone" type="text" class="form-control" name="phone"
               value="{{ old('phone') }}"
               maxlength="20" required>
    </div>
</div>
