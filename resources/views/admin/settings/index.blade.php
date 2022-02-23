<x-admin-layout>
    <x-slot name="header_content">
        <h1>@lang('settings.setting_management')</h1>
        <div class="section-header-breadcrumb">
            {{ Breadcrumbs::render('users') }}
        </div>
    </x-slot>

    <div>
        <h2 class="section-title">All About Settings</h2>
        <p class="section-lead">
            You can adjust all settings here
        </p>
        <div id="output-status"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4>Jump To</h4>
                    </div>
                    <div class="card-body">
                        @if ($categories)
                            <ul class="nav nav-pills flex-column">
                                @foreach ($categories as $category)
                                    @php
                                        $activeClass = $category == $currentCategory ? 'active' : '';
                                    @endphp
                                    <li class="nav-item"><a
                                            href="{{ url('admin/settings?category=' . $category) }}"
                                            class="nav-link {{ $activeClass }}">{{ ucwords($category) }}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                {!! Form::open(['url' => 'admin/settings', 'files' => true]) !!}
                <div class="card" id="settings-card">
                    <div class="card-header">
                        <h4>{{ ucwords($currentCategory) }} Settings</h4>
                    </div>
                    <div class="card-body">

                        @foreach ($settings as $setting)
                            <div class="form-group row align-items-center">
                                <label for="{{ $setting->key }}"
                                    class="form-control-label col-sm-3 text-md-right">{{ $setting->name }}</label>
                                <div class="col-sm-6 col-md-9">
                                    @include('admin.settings.setting_field', ['setting' => $setting])
                                </div>
                            </div>
                            @if ($setting->setting_type == 'file' && get_setting($setting->setting_key, false))
                                <div class="form-group row align-items-center">
                                    <label class="form-control-label col-sm-3 text-md-right">&nbsp;</label>
                                    <div class="col-sm-6 col-md-6">
                                        <img src="{{ get_setting($setting->setting_key, false) }}" alt=""
                                            class="img-thumbnail">
                                    </div>
                                    <div class="col-sm-3 col-md-3">
                                        <a href="{{ url('admin/settings/remove/' . $setting->id) }}"
                                            class="btn btn-danger">Remove</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="card-footer bg-whitesmoke text-md-right">
                        <button class="btn btn-primary" id="save-btn">Save Changes</button>
                        <button class="btn btn-secondary" type="button">Reset</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</x-admin-layout>
