<?php

namespace fwcms;

/**
 * Trait реализующий паттерн Singletone
 *
 * @author cobweb
 */
trait TSingletone 
{
    /**
     * Св-во заполняемое обьектом если его в нем нет 
     * @var type object
     */
    private static $instance;
    
    public static function instance() 
    {
        if(self::$instance === null)
        {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
