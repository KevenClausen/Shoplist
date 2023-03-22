<?php

namespace Config;

class ModulConfig
{
    protected static array $config = [
        'Einkauf/Category',
        'Einkauf/Shop',
        'Einkauf/Bundle',
        'Einkauf/Article',
    ];

    public static function getModule(): array
    {
        return self::$config ?? [];
    }

}