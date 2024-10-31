<?php

namespace RufoCF7\ATA;

function str($text, $domain = ATAConfig::TEXT_DOMAIN)
{
    return _e($text, $domain);
}

function files_in($folder)
{

    if ($handle = opendir($folder)) {
        while (false !== ($entry = readdir($handle))) {
            if (strpos($entry, '.php') !== false) $files[] = $folder . $entry;
        }
        closedir($handle);
    }
    return $files;
}
