<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;
use Illuminate\Support\Facades\Lang;

// Dashboard > Manage Post
Breadcrumbs::for('posts', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push(Lang::get('blog::posts.manage_posts'), route('blog-posts.index'));
});

// Dashboard > Manage Post > Create Post
Breadcrumbs::for('posts-create', function (BreadcrumbTrail $trail) {
    $trail->parent('posts');
    $trail->push(Lang::get('blog::posts.create_posts'), route('blog-posts.create'));
});

// Dashboard > Manage Post > [Post]
Breadcrumbs::for('posts-show', function (BreadcrumbTrail $trail, $item) {
    $trail->parent('posts');
    $trail->push(\Illuminate\Support\Str::limit($item->title, 25, $end = ' ...'), route('blog-posts.edit', $item->id));
});

// Dashboard > Manage Page
Breadcrumbs::for('pages', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push(Lang::get('blog::pages.manage_pages'), route('blog-pages.index'));
});

// Dashboard > Manage Page > Create Page
Breadcrumbs::for('pages-create', function (BreadcrumbTrail $trail) {
    $trail->parent('pages');
    $trail->push(Lang::get('blog::pages.create_pages'), route('blog-pages.create'));
});

// Dashboard > Manage Page > [Post]
Breadcrumbs::for('pages-show', function (BreadcrumbTrail $trail, $item) {
    $trail->parent('pages');
    $trail->push(\Illuminate\Support\Str::limit($item->title, 25, $end = ' ...'), route('blog-pages.edit', $item->id));
});

// Dashboard > Manage Categories
Breadcrumbs::for('categories', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push(Lang::get('blog::categories.manage_categories'), route('blog-categories.index'));
});
