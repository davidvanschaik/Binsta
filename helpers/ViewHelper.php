<?php

namespace Helpers;

use Twig\loader\filesystemloader;
use Twig\environment;

class ViewHelper
{
    public static function template($templateName, array $data)
    {
        $twig = new Environment(new FilesystemLoader('../resources/views'));
        $twig->display($templateName, $data);
    }
}
