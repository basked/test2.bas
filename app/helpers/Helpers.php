<?php


namespace BasHelpers;

class Helpers
{
    public function getName()
    {
        echo __NAMESPACE__;
    }

    public static function fill_header($header)
    {
        echo "<h3 style='background-color: aquamarine; color: cadetblue;'>$header</h3>";
    }


}