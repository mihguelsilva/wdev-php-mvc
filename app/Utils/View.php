<?php
namespace App\Utils;

class View
{
    private static function getContentView ($view)
    {
        $file = __DIR__ . DS . ".." . DS . ".." . DS . "resources" . DS . "view" . DS . $view . ".html";

        return file_exists($file) ? file_get_contents($file) : "";
    }
    
    public static function render ($view)
    {
        $contentView = self::getContentView($view);
        return $contentView;
    }
}
?>
