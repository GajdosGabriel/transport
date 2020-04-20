<div>
    <div class="custom-control custom-checkbox h-company xs-mb-20 xs-mt-20">
        <input type="checkbox" id="joint" name="joint[details]" class="custom-control-input">
        <label for="joint" class="custom-control-label"><span class="h3">@lang('joint')</span></label>
    </div>

    <div class="content opacity">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <div class="form-group{{ $errors->has('joint.name') ? ' is-invalid' : '' }}">
                    <label for="joint_name">@lang('form.fullName')</label>

                    <input id="joint_name" type="text" class="form-control" name="joint[name]"
                           value="{{ old('joint.name') }}" maxlength="80" disabled>
                </div>
            </div>

            <div class="col-xs-12 col-md-6">
                <div class="form-group{{ $errors->has('joint.id') ? ' is-invalid' : '' }}">
                    <label for="joint[id]">@lang('form.govID')</label>

                    <input id="joint[id]" type="text" class="form-control" name="joint[id]"
                           value="{{ old('joint.id') }}" maxlength="50" disabled>
                </div>
            </div>
        </div>
    </div>
</div>


