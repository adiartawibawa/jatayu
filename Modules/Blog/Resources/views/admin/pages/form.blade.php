<x-admin-layout>
    <x-slot name="header_content">
        @if (empty($page))
            <h1>@lang('blog::pages.create_pages')</h1>
        @else
            <h1>@lang('blog::pages.manage_pages')</h1>
        @endif
        <div class="section-header-breadcrumb">
            @if (empty($page))
                {{ Breadcrumbs::render('pages-create') }}
            @else
                {{ Breadcrumbs::render('pages-show', $page) }}
            @endif
        </div>
    </x-slot>

    <div>
        @if (isset($page))
            {!! Form::model($page, ['url' => ['admin/blog/pages', $page->id], 'method' => 'PUT', 'files' => true]) !!}
            {!! Form::hidden('id') !!}
        @else
            {!! Form::open(['url' => 'admin/blog/pages', 'files' => true]) !!}
        @endif
        @csrf
        <div class="section-body">
            <h2 class="section-title">
                {{ empty($page) ? __('blog::pages.page_add_new') : __('blog::pages.page_update') }}
            </h2>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ empty($page) ? __('blog::pages.add_card_title') : __('blog::pages.update_card_title') }}
                            </h4>
                        </div>
                        <div class="card-body">
                            {{-- @include('layouts.admin.shared.flash') --}}
                            <div class="form-group">
                                {!! Form::label('title', __('blog::pages.title_label')) !!}
                                {!! Form::text('title', null, ['class' => 'form-control' . ($errors->has('title') ? ' is-invalid' : '') . (!$errors->has('title') && old('title') ? ' is-valid' : ''), 'placeholder' => __('blog::pages.title_label')]) !!}
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                {!! Form::label('body', __('blog::pages.body_label')) !!}
                                {!! Form::textarea('body', null, ['class' => 'form-control summernote', 'placeholder' => __('blog::pages.body_label')]) !!}
                                @error('body')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Publish</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        {!! Form::label('publish_date', __('blog::pages.publish_date_label')) !!}
                                        {!! Form::text('publish_date', !empty(old('publish_date')) ? old('publish_date') : date('Y-m-d H:i:s'), ['class' => 'form-control datetimepicker', 'placeholder' => __('blog::pages.publish_date_label')]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('status', __('blog::pages.status_label')) !!}
                                        {!! Form::select('status', $statuses, !empty($page->status) ? $page->status : old('status'), ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary">{{ __('blog::pages.btn_save_label') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</x-admin-layout>
