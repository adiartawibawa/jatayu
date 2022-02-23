<x-admin-layout>
    <x-slot name="header_content">
        <h1>@lang('users.user_management')</h1>
        <div class="section-header-breadcrumb">
            {{ Breadcrumbs::render('user-show', $user) }}
        </div>
    </x-slot>

    <div>
        <h2 class="section-title">@lang('users.user_list')</h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>@lang('users.user_detail')</h4>
                    </div>
                    <div class="card-body">
                        {{-- @include('layouts.admin.shared.flash') --}}
                        <div class="form-row">
                            <div class="col-md-2">
                                <Label>Name</Label>
                            </div>
                            <div class="col-md-10">
                                : {{ $user->name }}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2">
                                <Label>Email</Label>
                            </div>
                            <div class="col-md-10">
                                : {{ $user->email }}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2">
                                <Label>Verified</Label>
                            </div>
                            <div class="col-md-10">
                                : {{ $user->verified_at_formatted }}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2">
                                <Label>Created</Label>
                            </div>
                            <div class="col-md-10">
                                : {{ $user->created_at_formatted }}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2">
                                <Label>Updated</Label>
                            </div>
                            <div class="col-md-10">
                                : {{ $user->updated_at_formatted }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
