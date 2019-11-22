<?php

function lang($word) {
    $arr = array(
        # Configuration
        'DBname' => 'arabname',

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

        # Footer
        "important_links" => 'روابط هامة',
        "recent_news" => "آخر الأخبار",
        'contact_us' => 'اتصل بنا',
        'sign_up' => 'تسجيل',

        # Sign in Form
        'user_name' => 'اسم المستخدم',
        'password' => 'كلمة المرور',

        # Make Appointment
        'enter_your_name' => 'ادخل اسمك'
    );
    return isset($arr[$word]) ? $arr[$word] : $word;

}