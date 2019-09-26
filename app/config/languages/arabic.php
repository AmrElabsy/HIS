<?php

    function lang($word)
    {
        $arr = array(
            # Navigation Bar
            "KFS_Hos" => "مستشفى جامعة كفر الشيخ",
            "home_page" => "الصفحة الرئيسية",
            "doctors" => "الأطباء",
            "appointments" => "المواعيد",
            "clinics" => "العيادات",
            'make_appointment' => "حجز ميعاد",
            "login" => "تسجيل الدخول",
            "lang" => "اللغة",
            "arabic_lang" => "اللغة العربية",
            "english_lang" => "اللغة الإنجليزية",

            'view_profile' => 'عرض الصفحة الشخصية',
            'patients' => 'المرضى',

            "important_links" => 'روابط هامة',
            "recent_news" => "آخر الأخبار",
            'contact_us' => 'اتصل بنا'
        );
        return isset($arr[$word]) ? $arr[$word] : $word;

    }