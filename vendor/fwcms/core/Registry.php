<?php

namespace fwcms;

/**
 * Description of Registry
 *
 * @author cobweb
 */
class Registry 
{
    use TSingletone;
    
    public static $properties = [];
    
    /**
     * Установить свойства
     * @param type $name
     * @param type $value
     */
    public function setProperty($name, $value) 
    {
        self::$properties[$name] = $value; 
    }
    
    /**
     * Получить свойства
     * @param type $name
     * @return type
     */
    public function getProperty($name) 
    {
        if(isset(self::$properties[$name]))
        {
            return self::$properties[$name];
        }
        else 
        {
            return null;
        }
    }
    
    /**
     * Распечатка свойств
     * @return type
     */
    public function getProperties() 
    {
        return self::$properties;
    }
}
