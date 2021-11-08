<?php

namespace turki\Settings;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'turki\Settings\Setting\SettingStorage';
    }
}
