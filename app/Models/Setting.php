<?php

namespace App\Models;

use App\Models\Concerns\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Setting extends Model implements HasMedia
{
    use HasFactory, UuidTrait, InteractsWithMedia;

    protected $fillable = [
        'id',
        'category',
        'setting_type',
        'setting_key',
        'name',
        'string_value',
        'text_value',
        'boolean_value',
        'integer_value',
        'decimal_value',
    ];

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    public static function getCategories()
    {
        return Setting::select('category')->orderBy('category', 'asc')->groupBy('category')->get()->pluck('category');
    }

    public static function getSettings()
    {
        $settings = Setting::orderBy('category', 'asc')->get();
        $categories = Setting::getCategories();

        $groupedSettings = [];

        foreach ($categories as $category) {
            if ($settings) {
                foreach ($settings as $setting) {
                    if ($setting->category == $category) {
                        $groupedSettings[$category][] = $setting;
                    }
                }
            }
        }

        return $groupedSettings;
    }

    public static function defaultSettings()
    {
        return [
            [
                'category' => 'general',
                'setting_type' => 'string',
                'setting_key' => 'general_app_name',
                'name' => 'Application Name',
                'string_value' => 'Jatayu',
                'validation_rules' => 'required',
            ],
            [
                'category' => 'general',
                'setting_type' => 'string',
                'setting_key' => 'general_app_description',
                'name' => 'App Description',
                'string_value' => 'Jatayu Starter Application based on Laravel 8',
                'validation_rules' => '',
            ],
            [
                'category' => 'general',
                'setting_type' => 'file',
                'setting_key' => 'general_app_logo',
                'name' => 'App Logo',
                'file_value' => '',
                'validation_rules' => 'image|mimes:jpeg,png,jpg,gif|max:4096',
            ],
            [
                'category' => 'general',
                'setting_type' => 'string',
                'setting_key' => 'general_email_contact',
                'name' => 'Email Contact',
                'string_value' => 'contact@jatayu.com',
                'validation_rules' => 'required|email',
            ],
            [
                'category' => 'general',
                'setting_type' => 'string',
                'setting_key' => 'general_phone',
                'name' => 'Phone',
                'string_value' => '+62234234123',
                'validation_rules' => 'required',
            ]
        ];
    }
}
