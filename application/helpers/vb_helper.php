<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function reverse_number($number) {

    $siteLang = site_language();
    $search_array = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $replace_array = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

    if ($siteLang != 'english') {

        $_number = str_replace($replace_array, $search_array, $number);
        return $_number;
    } else if ($siteLang == 'english') {

        $en_number = str_replace($search_array, $replace_array, $number);
        return $en_number;
    } else {
        return $number;
    }
}

function reverse_date($currentDate) {
    
    $currentDate = date("d-M-Y", strtotime($currentDate));
    $siteLang = site_language();
    //var_dump($siteLang);exit;
    $engDATE = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
    $bangDATE = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০', 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', '
            বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'
    );

    if ($siteLang != 'english') {

        $currentDate = str_replace($engDATE, $bangDATE, $currentDate);
        return $currentDate;
    } else if ($siteLang == 'english') {

        $currentDate = str_replace($bangDATE, $engDATE, $currentDate);
        return $currentDate;
    } else {
        return $currentDate;
    }
}

function user_roles() {
    $siteLang = site_language();
    if ($siteLang == 'english') {
        return array('Guest', 'Customer', 'Field Manager', 'Admin','Pharmacist','Field Worker');
    } else {
        return array('অতিথি', 'ক্রেতা', 'ম্যানেজার', 'অয়াডমিন','বিক্রেতা','কর্মি');
    }
}

function site_language() {
    $CI = & get_instance();  //get instance, access the CI superobject

    $siteLang = $CI->session->userdata('vb_site_lang');
    if (!$siteLang) {
        $siteLang = 'bangla';
    }
    return $siteLang;
}

function get_login_user() {
    $CI = & get_instance();  //get instance, access the CI superobject

    $user = $CI->session->userdata('vb_login_user');
    if (!$user) {
        $user = array();
    }
    return $user;
}

function print_string() {
    $siteLang = site_language();
    if ($siteLang == 'english') {
        return '_en';
    } else {
        return '_bn';
    }
}

function debug($string) {
    echo '<pre>';
    echo $string;
    echo '</pre>';
}

function get_zilla() {
     $siteLang = site_language();
    if ($siteLang == 'english') {
        $dist_en = array('Barguna', 'Barisal', 'Bhola',
            'Jhalokati', 'Patuakhali', 'Pirojpur', 'Bandarban', 'Brahmanbaria', 'Chandpur', 'Chittagong',
            'Comilla', 'Cox\'s Bazar', 'Feni', 'Khagrachhari', 'Lakshmipur', 'Noakhali',
            'Rangamati', 'Dhaka', 'Faridpur', 'Gazipur', 'Gopalganj', 'Kishoreganj', 'Madaripur',
            'Manikganj', 'Munshiganj', 'Shariatpur',
            'Narayanganj',
            'Narsingdi',
            'Rajbari',
            'Tangail',
            'Bagerhat',
            'Chuadanga',
            'Jessore',
            'Jhenaidah',
            'Khulna',
            'Kushtia',
            'Magura',
            'Meherpur',
            'Narail',
            'Satkhira',
            'Jamalpur',
            'Mymensingh',
            'Netrakona',
            'Sherpur',
            'Bogra',
            'Joypurhat',
            'Naogaon',
            'Natore',
            'Chapainawabganj',
            'Pabna',
            'Rajshahi',
            'Sirajganj',
            'Dinajpur',
            'Gaibandha',
            'Kurigram',
            'Lalmonirhat',
            'Nilphamari',
            'Panchagarh',
            'Rangpur',
            'Thakurgaon',
            'Habiganj',
            'Moulvibazar',
            'Sunamganj',
            'Sylhet');
    return $dist_en;
    }else{
        
    
    return  array('বরগুনা',
        'বরিশাল',
        'ভোলা',
        'ঝালকাঠি',
        'পটুয়াখালী',
        'পিরোজপুর',
        'বান্দরবান',
        'ব্রাহ্মণবাড়ীয়া',
        'চাঁদপুর',
        'চট্টগ্রাম',
        'কুমিল্লা',
        'কক্সবাজার',
        'ফেনী',
        'খাগড়াছড়ি',
        'লক্ষীপুর',
        'নোয়াখালী',
        'রাঙ্গামাটি',
        'ঢাকা',
        'ফরিদপুর',
        'গাজীপুর',
        'গোপালগঞ্জ',
        'কিশোরগঞ্জ',
        'মাদারীপুর',
        'মানিকগঞ্জ',
        'মুন্সীগঞ্জ',
        'নারায়ণগঞ্জ',
        'নরসিংদী',
        'রাজবাড়ী',
        'শরীয়তপুর',
        'টাঙ্গাইল',
        'বাগেরহাট',
        'চুয়াডাঙ্গা',
        'যশোর',
        'ঝিনাইদহ',
        'খুলনা',
        'কুষ্টিয়া',
        'মাগুরা',
        'মেহেরপুর',
        'নড়াইল',
        'সাতক্ষিরা',
        'জামালপুর',
        'ময়মনসিংহ',
        'নেত্রকোনা',
        'শেরপুর',
        'বগুড়া',
        'জয়পুরহাট',
        'নওগাঁ',
        'নাটোর',
        'নওয়াবগঞ্জ',
        'পাবনা',
        'রাজশাহী',
        'সিরাজগঞ্জ',
        'দিনাজপুর',
        'গাইবান্ধা',
        'গাইবান্ধা',
        'লালমনিরহাট',
        'নীলফামারী',
        'পঞ্চগড়',
        'রংপুর',
        'ঠাকুরগাঁ',
        'হবিগঞ্জ',
        'মৌলভীবাজার',
        'সুনামগঞ্জ',
        'সিলেট'
    );
    
    
    }
}


function get_string($key) {
    $CI = & get_instance();
    return $CI->lang->line($key);
}

function is_english($str) {
    if (strlen($str) != strlen(utf8_decode($str))) {
        return false;
    } else {
        return true;
    }
}
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return md5(implode($pass)); //turn the array into a string
}
function vb_mail($to, $from, $subject,$body){
                $CI = & get_instance();
                $CI->config->load('development/custom');
                $config = $CI->config->item('local_email');
                $CI->load->library('email', $config);
                $CI->email->set_newline("\r\n");
                $CI->email->from($from); // change it to yours
                $CI->email->to($to); // change it to yours
                $CI->email->subject($subject);
                $CI->email->message($body);

                if ($CI->email->send()) {
                    return true;
                } else {
                    return false;
                }
}

