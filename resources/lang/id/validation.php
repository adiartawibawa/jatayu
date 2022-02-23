<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute harus diterima',
    'accepted_if' => ':attribute harus diterima bila :other adalah :value.',
    'active_url' => ':attribute bukan URL yang sah.',
    'after' => 'The :attribute harus tanggal setelah :date.',
    'after_or_equal' => ':attribute harus tanggal setelah atau sama dengan :date.',
    'alpha' => ':attribute hanya boleh berisi huruf.',
    'alpha_dash' => ':attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
    'alpha_num' => ':attribute hanya boleh berisi huruf dan angka.',
    'array' => ':attribute harus berupa larik.',
    'before' => ':attribute harus tanggal sebelum :date.',
    'before_or_equal' => ':attribute harus tanggal sebelum atau sama dengan:date.',
    'between' => [
        'numeric' => ':attribute harus antara :min dan :max.',
        'file' => ':attribute harus antara :min dan :max kilobytes.',
        'string' => ':attribute harus antara :min dan :max karakter.',
        'array' => ':attribute harus memiliki antara :min dan :max item.',
    ],
    'boolean' => ':attribute isian harus benar atau salah.',
    'confirmed' => ':attribute konfirmasi tidak cocok.',
    'current_password' => 'Kata sandi salah.',
    'date' => ':attribute bukan tanggal yang sah.',
    'date_equals' => ':attribute harus tanggal yang sama dengan :date.',
    'date_format' => ':attribute tidak sesuai format :format.',
    'declined' => ':attribute ditolak.',
    'declined_if' => ':attribute ditolak ketika :other adalah :value.',
    'different' => ':attribute dan :other harus berbeda.',
    'digits' => ':attribute harus :digits digits.',
    'digits_between' => ':attribute harus diantara :min dan :max digits.',
    'dimensions' => ':attribute memiliki dimensi gambar yang tidak sah.',
    'distinct' => ':attribute bidang memiliki nilai duplikat.',
    'email' => ':attribute Harus alamat e-mail yang sah.',
    'ends_with' => ':attribute harus diakhiri dengan salah satu dari berikut ini: :values.',
    'enum' => ':attribute yang dipilih tidak sah.',
    'exists' => ':attribute yang dipilih tidak sah.',
    'file' => ':attribute harus berupa file',
    'filled' => ':attribute isian harus berupa nilai',
    'gt' => [
        'numeric' => ':attribute harus lebih besar dari :value.',
        'file' => ':attribute harus lebih besar dari :value kilobytes.',
        'string' => ':attribute harus lebih besar dari :value characters.',
        'array' => ':attribute harus lebih besar dari :value items.',
    ],
    'gte' => [
        'numeric' => ':attribute harus lebih besar atau sama dengan :value.',
        'file' => ':attribute harus lebih besar atau sama dengan :value kilobytes.',
        'string' => ':attribute harus lebih besar atau sama dengan :value characters.',
        'array' => ':attribute harus memiliki :value item atau lebih.',
    ],
    'image' => ':attribute harus berupa gambar.',
    'in' => ':attribute yang dipilih tidak sah.',
    'in_array' => ':attribute isian tidak ada di :other.',
    'integer' => ':attribute harus berupa integer.',
    'ip' => ':attribute harus berupa alamat IP yang sah.',
    'ipv4' => ':attribute harus berupa alamat IPv4 yang sah.',
    'ipv6' => ':attribute harus berupa alamat IPv6 yang sah.',
    'mac_address' => ':attribute harus berupa alamat MAC yang sah',
    'json' => ':attribute harus berupa string JSON yang sah.',
    'lt' => [
        'numeric' => ':attribute harus kurang dari :value.',
        'file' => ':attribute harus kurang dari :value kilobytes.',
        'string' => ':attribute harus kurang dari :value characters.',
        'array' => ':attribute tidak perlu kurang dari :value items.',
    ],
    'lte' => [
        'numeric' => ':attribute harus kurang dari or equal to :value.',
        'file' => ':attribute harus kurang dari or equal to :value kilobytes.',
        'string' => ':attribute harus kurang dari or equal to :value characters.',
        'array' => ':attribute tidak boleh lebih dari :value items.',
    ],
    'max' => [
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'file' => ':attribute tidak boleh lebih besar dari :max kilobytes.',
        'string' => ':attribute tidak boleh lebih besar dari :max characters.',
        'array' => ':attribute tidak boleh lebih dari :max items.',
    ],
    'mimes' => ':attribute harus berupa file bertipe: :values.',
    'mimetypes' => ':attribute harus berupa file bertipe: :values.',
    'min' => [
        'numeric' => ':attribute harus setidaknya :min.',
        'file' => ':attribute harus setidaknya :min kilobytes.',
        'string' => ':attribute harus setidaknya :min characters.',
        'array' => ':attribute harus memiliki setidaknya :min items.',
    ],
    'multiple_of' => ':attribute harus kelipatan :value.',
    'not_in' => ':attribute yang dipilih tidak sah.',
    'not_regex' => ':attribute format tidak sah.',
    'numeric' => ':attribute harus berupa angka.',
    'password' => 'Kata sandi salah.',
    'present' => ':attribute isian harus ada.',
    'prohibited' => ':attribute isian dilarang',
    'prohibited_if' => ':attribute isian dilarang ketika :other adalah :value.',
    'prohibited_unless' => ':attribute isian dilarang kecuali :other ada di dalam :values.',
    'prohibits' => ':attribute isian dilarang :other dari yang disajikan.',
    'regex' => ':attribute format tidak sah.',
    'required' => ':attribute isian diperlukan.',
    'required_if' => ':attribute isian diperlukan ketika :other adalah :value.',
    'required_unless' => ':attribute isian diperlukan kecuali :other ada di dalam :values.',
    'required_with' => ':attribute isian diperlukan ketika :values yang disajikan.',
    'required_with_all' => ':attribute isian diperlukan ketika :values yang semua disajikan.',
    'required_without' => ':attribute isian diperlukan ketika :values tidak disajikan.',
    'required_without_all' => ':attribute isian diperlukan ketika tidak ada :values disajikan.',
    'same' => ':attribute dan :other harus cocok.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobytes.',
        'string' => ':attribute harus :size characters.',
        'array' => ':attribute harus berisi :size item.',
    ],
    'starts_with' => ':attribute harus dimulai dengan salah satu dari berikut ini: :values.',
    'string' => ':attribute harus berupa string.',
    'timezone' => ':attribute harus berupa timezone yang sah.',
    'unique' => ':attribute telah digunakan.',
    'uploaded' => ':attribute gagal untuk diunggah.',
    'url' => ':attribute harus berupa URL yang sah.',
    'uuid' => ':attribute harus berupa UUID yang sah.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
