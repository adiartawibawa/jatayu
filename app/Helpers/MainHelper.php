<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

if (!function_exists('array_to_object')) {

    /**
     * Convert Array into Object in deep
     *
     * @param array $array
     * @return
     */
    function array_to_object($array)
    {
        return json_decode(json_encode($array));
    }
}

if (!function_exists('empty_fallback')) {

    /**
     * Empty data or null data fallback to string -
     *
     * @return string
     */
    function empty_fallback($data)
    {
        return ($data) ? $data : "-";
    }
}

if (!function_exists('create_button')) {

    function create_button($action, $model)
    {
        $action = str_replace($model, "", $action);

        return [
            'submit_text' => ($action == "update") ? "Update" : "Submit",
            'submit_response' => ($action == "update") ? "Updated." : "Submited.",
            'submit_response_notyf' => ($action == "update") ? "Data " . $model . " updated successfully" : "Data " . $model . " added successfully"
        ];
    }
}

if (!function_exists('get_setting')) {
    function get_setting($key, $cache = true)
    {
        if (!$cache) {
            return get_setting_value($key);
        }

        return Cache::remember('support-get-setting-' . $key, 5, function () use ($key) {
            return get_setting_value($key);
        });
    }
}

if (!function_exists('get_setting_value')) {
    function get_setting_value($key)
    {
        $setting = Setting::where('setting_key', $key)->first();
        if ($setting) {
            return $setting[$setting->setting_type . '_value'];
        }

        return '';
    }
}

if (!function_exists('get_contact_emails')) {
    function get_contact_emails($firstEmailOnly = true)
    {
        $setting = get_setting('general_email_contact');

        $emails = explode(',', $setting);

        if (!empty($emails) && $firstEmailOnly) {
            return trim($emails[0]);
        }

        if (!empty($emails)) {
            return $setting;
        }

        return '';
    }
}
