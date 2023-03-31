<?php


namespace Singi2016cn\ParseXmind\Helper;


class Common
{
    /**
     * 过滤标题
     * @param string $title
     * @return string
     */
    public static function filterTitle(string $title): string
    {
        return strip_tags($title);
    }
}