<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

use Illuminate\Support\Facades\Lang;


// Dashboard
Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('home'));
});

// Admin User
Breadcrumbs::for('users', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push(Lang::get('users.user_management'), route('users.index'));
});

// Dashboard > Users > Create
Breadcrumbs::for('user-create', function (BreadcrumbTrail $trail) {
    $trail->parent('users');
    $trail->push(Lang::get('users.user_add_new'), route('users.create'));
});

// Dashboard > Users > [User]
Breadcrumbs::for('user-show', function (BreadcrumbTrail $trail, $item) {
    $trail->parent('users');
    $trail->push($item->name, route('users.show', $item->id));
});

// Admin Setting
Breadcrumbs::for('settings', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push(Lang::get('settings.setting_management'), route('settings.update'));
});

// Admin Role
Breadcrumbs::for('roles', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push(Lang::get('roles.role_management'), route('roles.index'));
});

// Dashboard > Roles > Create
Breadcrumbs::for('role-create', function (BreadcrumbTrail $trail) {
    $trail->parent('roles');
    $trail->push(Lang::get('roles.role_add_new'), route('roles.create'));
});

// Dashboard > Roles > [Role]
Breadcrumbs::for('role-show', function (BreadcrumbTrail $trail, $item) {
    $trail->parent('roles');
    $trail->push($item->name, route('roles.show', $item->id));
});
