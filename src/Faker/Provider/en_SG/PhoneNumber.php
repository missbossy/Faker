<?php

namespace Faker\Provider\en_SG;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+65-6###-####',
        '+65-9###-####',
        '9###-####',
        '9###-####',
        '9###-####',
        '8###-####',
        '6###-####',
        '6###-####',

    );

   protected static $mobile = array(
        '9###-####',
        '9###-####',
        '9###-####',
        '8###-####'
    );

     protected static $landLine = array(
        '6###-####',
        '6###-####',
        '6###-####'
    );

    public static function landLine()
    {
        return static:: numerify(static::randomElement(static::$landLine));
    }

    public static function mobile()
    {
        return static:: numerify(static::randomElement(static::$mobile));
    }
}
