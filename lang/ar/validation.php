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

    'accepted' => 'يجب الموافقة على الخاصية ":attribute"',
    'active_url' => 'الخاصية ":attribute" ليست في صورة رابط صالح',
    'after' => 'يجب أن يقع التاريخ بعد :date',
    'after_or_equal' => 'يجب أن يقع التاريخ بعد :date أو مساوياً له',
    'alpha' => 'يجب أن يحتوي على حروف فقط',
    'alpha_dash' => 'يجب أن يحتوي على حروف وأرقام و - و _ فقط',
    'alpha_num' => 'يجب أن يحتوي على حروف وأرقام فقط',
    'array' => 'يجب أن تكون قائمة',
    'before' => 'يجب أن يقع التاريخ قبل :date',
    'before_or_equal' => 'يجب أن يقع التاريخ قبل :date أو مساوياً له',
    'between' => [
        'numeric' => 'يجب أن يقع بين :min و :max.',
        'file' => 'يجب أن يكون بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون طول النص بين :min و :max حرفاً.',
        'array' => 'يجب أن يحتوي على عدد عناصر بين :min و :max.',
    ],
    'boolean' => 'يجب أن تكون القيمة صواب أو خطأ',
    'confirmed' => 'التأكيد لا يطابق القيمة الأولى',
    'date' => 'ليس تاريخاً صالحاً',
    'date_equals' => 'يجب أن يساوي التاريخ :date.',
    'date_format' => 'يجب أن يكون بالشكل :format.',
    'different' => 'الخاصية :attribute و :other يجب أن تكونا مختلفتين',
    'digits' => 'يجب أن يتكون من :digits رقماً.',
    'digits_between' => 'يجب أن يتكون من :min إلى :max رقماً.',
    'dimensions' => 'مقاسات الصورة غير صحيحة',
    'distinct' => 'هذه القيمة موجودة مسبقا (مكررة)',
    'email' => 'ليس في صورة بريد إلكتروني صالح',
    'ends_with' => 'يجب أن ينتهي بأحد القيم: :values.',
    'exists' => 'القيمة المختارة غير صالحة',
    'file' => 'يجب أن يكون ملفاً',
    'filled' => 'هذا الحقل مطلوب',
    'gt' => [
        'numeric' => 'يجب أن يكون أكبر من :value.',
        'file' => 'يجب أن يكون أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون أكبر من :value حرفاً.',
        'array' => 'يجب أن يحتوي على أكثر من :value عنصراً.',
    ],
    'gte' => [
        'numeric' => 'يجب أن يكون أكبر من :value أو مساوياً له.',
        'file' => 'يجب أن يكون أكبر من :value كيلوبايت أو مساوياً له.',
        'string' => 'يجب أن يكون أكبر من :value حرفاً أو مساوياً له.',
        'array' => 'يجب أن يحتوي على :value عنصراً على الأقل.',
    ],
    'image' => 'يجب أن يكون صورة',
    'in' => 'القيمة المختارة غير صالحة',
    'in_array' => 'القيمة المختارة غير موجودة ضمن :other.',
    'integer' => 'يجب أن يكون رقماً صحيحاً',
    'ip' => 'يجب أن يكون عنوان IP صالح',
    'ipv4' => 'يحب أن يكون عنوان IPv4 صالح.',
    'ipv6' => 'يحب أن يكون عنوان IPv6 صالح.',
    'json' => 'يجب أن تكون في القيمة في شكل JSON',
    'lt' => [
        'numeric' => 'القيمة يجب أن تكون أقل من :value.',
        'file' => 'القيمة يجب أن تكون أقل من :value كيلوبايت.',
        'string' => 'القيمة يجب أن تكون أقل من :value حرفاً.',
        'array' => 'يجب أن يحتوي على أقل من :value عنصراً.',
    ],
    'lte' => [
        'numeric' => 'القيمة يجب أن تكون أقل من :value أو مساوية له.',
        'file' => 'القيمة يجب أن تكون أقل من :value كيلوبايت.',
        'string' => 'القيمة يجب أن تكون أقل من :value حرفاً.',
        'array' => 'يجب أن لا يحتوي على أكثر من :value عنصراً.',
    ],
    'max' => [
        'numeric' => 'يجب ألا تكون القيمة أكبر من :max.',
        'file' => 'يجب ألا تكون القيمة أكبر من :max كيلوبايت.',
        'string' => 'يجب ألا تكون القيمة أكبر من :max حرفاً.',
        'array' => 'يجب ألا يحتوي على أكثر من :max عنصراً.',
    ],
    'mimes' => 'يجب أن يكون ملف من نوع: :values.',
    'mimetypes' => 'يجب أن يكون ملف من نوع: :values.',
    'min' => [
        'numeric' => 'يجب أن تكون القيمة على الأقل :min.',
        'file' => 'يجب أن تكون القيمة على الأقل :min كيلوبايت.',
        'string' => 'يجب أن تكون القيمة على الأقل :min characters.',
        'array' => 'يجب أن يحتوي على :min عنصراً على الأقل.',
    ],
    'not_in' => 'القيمة المختارة غير صحيحة.',
    'not_regex' => 'ليس في الصورة الصحيحة',
    'numeric' => 'يجب أن يكون رقما',
    'password' => 'كلمة المرور غير صحيحة',
    'present' => 'هذا الحقل مطلوب',
    'regex' => 'ليس في الصورة الصحيحة',
    'required' => 'هذا الحقل مطلوب',
    'required_if' => 'هذا الحقل مطلوب عندما يكون :other يساوي :value.',
    'required_unless' => 'هذا الحقل مطلوب مالم يكن :other يساوي :values.',
    'required_with' => 'هذا الحقل مطلوب عندما يكون :values موجوداً.',
    'required_with_all' => 'هذا الحقل مطلوب عندما يكون :values موجودة جميعاً',
    'required_without' => 'هذا الحقل مطلوب عندما يكون :values غير موجود.',
    'required_without_all' => 'هذا الحقل مطلوب عندما لا يكون أي من :values موجوداً.',
    'same' => 'يجب أن يكون مطابقاً لـ :other.',
    'size' => [
        'numeric' => 'يجب أن يكون الحجم :size.',
        'file' => 'يجب أن يكون الحجم :size كيلوبايت.',
        'string' => 'يجب أن يكون الحجم :size حرفاً.',
        'array' => 'يجب أن يحتوي على :size عنصراً',
    ],
    'starts_with' => 'يجب أن يبدأ بـ: :values.',
    'string' => 'يجب أن يكون نصاً',
    'timezone' => 'يجب أن يكون منطقة زمنية صالحة',
    'unique' => 'هذه القيمة مأخوذة مسبقاً',
    'uploaded' => 'فشل رفع :attribute',
    'url' => 'شكل الخاصية غير صحيح',
    'uuid' => 'يجب أن يكون UUID صالح',

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
