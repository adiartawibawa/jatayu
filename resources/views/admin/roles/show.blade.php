<x-admin-layout>
    <x-slot name="header_content">
        <h1>@lang('roles.role_management')</h1>
        <div class="section-header-breadcrumb">
            {{ Breadcrumbs::render('role-show', $role) }}
        </div>
    </x-slot>

    <div>
        <h2 class="section-title">@lang('roles.role_list')</h2>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Role Detail</h4>
                    </div>
                    <div class="card-body">
                        {{-- @include('layouts.admin.shared.flash') --}}
                        <div class="form-row">
                            <div class="col-md-2">
                                <Label>Name</Label>
                            </div>
                            <div class="col-md-10">
                                : {{ $role->name }}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2">
                                <Label>Guard</Label>
                            </div>
                            <div class="col-md-10">
                                : {{ $role->guard_name }}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2">
                                <Label>Created</Label>
                            </div>
                            <div class="col-md-10">
                                : {{ $role->created_at_formatted }}
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-2">
                                <Label>Updated</Label>
                            </div>
                            <div class="col-md-10">
                                : {{ $role->updated_at_formatted }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
