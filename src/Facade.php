<?php

namespace Turki\Settings;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'Turki\Settings\Setting\SettingStorage';
    }
}
