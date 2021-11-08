<?php

namespace turkialawlqy\Settings;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     * {@inheritdoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'turkialawlqy\Settings\Setting\SettingStorage';
    }
}
