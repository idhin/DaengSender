<?php

// setting all needs here

$settings['multy']['smtp'][]    = [ "host" => "smtp-relay.gmail.com", "port" => "587", "security" => "tls", "username" => "admina@allenehghacoughlin.com", "password" => "Passwordku123@" ];
$settings['multy']['smtp'][]    = [ "host" => "smtp-relay.gmail.com", "port" => "587", "security" => "tls", "username" => "xxxxxxxxxxxx", "password" => "xxxxxxx" ];

$settings['multy']['message'][] = [ "subject" => "Your account has been suspended", "email" => "##random_string_low_10##@##random_mix_10##.allenehghacoughlin.com", "name" => "ᴀᴘᴘʟᴇ" ];
$settings['multy']['message'][] = [ "subject" => "sub two ##random_mix_10##", "email" => "##random_string_low_10##@##random_string_low_10##.com", "name" => "name two" ];

$settings['main'] = [

        "delay_after"       => "1",
        "delay"             => "5",
        "html_file"         => "letter.html",
        "mailist_file"      => "mailist.txt",
        "attachment"        => "",
        "attachment_rename" => "",
        "charset"           => "iso-8859-1",
        "encoding"          => "",
        
];

$settings['headers'] = [

        'X-Originating-IP' => 'xx',
        'Authentication-Results' => 'xx',
        'Received' => 'xxx',

];

$settings['links'] = [

        "http://google.com",
        "http://yahoo.com",
        "http://youtube.com",

];