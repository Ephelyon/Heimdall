<h2>{{ __('app.apps.config') }} ({{ __('app.optional') }})</h2>
<div class="items">
    <input type="hidden" data-config="type" class="config-item" name="config[type]" value="\App\SupportedApps\Nzbget" />
    <div class="input">
        <label>{{ __('app.apps.username') }}</label>
        {!! Form::text('config[username]', null, array('placeholder' => __('app.apps.username'), 'data-config' => 'username', 'class' => 'form-control config-item')) !!}
    </div>
    <div class="input">
        <label>{{ __('app.apps.password') }}</label>
        <input type="password" name="config[password]" value="{{ $item->config->password or '' }}" placeholder="{{ __('app.apps.password') }}" class="form-control config-item" data-config="password" />
    </div>
    <div class="input">
        <button style="margin-top: 32px;" class="btn test" id="test_config">Test</button>
    </div>
</div>