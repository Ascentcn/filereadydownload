<?php
/* * * * * * * * * * अ ति थि  दे वो  भ व ! * * * * * * * * * * * * * *
* This Visitor Panel is free to use & strictly 𝙉𝙊𝙏 𝙁𝙊𝙍 𝙎𝘼𝙇𝙀 
* You can use it for free as a base for your any landing pages.  
* For Bigsec Community with <3 | https://t.me/bigseccommunity    
* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
$config        = array();
$config['key'] = "BEAST";

function getLog($pattern)
{
    $i = 0;
    $get = file_get_contents('../logs/access.log');

    foreach (array_unique(explode("\n", $get)) as $data) {
        if (preg_match("/\[$pattern\]/i", $data)) {
            $i++;
        }
    }

    return $i;
}
