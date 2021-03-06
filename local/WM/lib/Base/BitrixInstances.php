<?php

namespace WM\Base;


/**
 * Class BitrixInstances
 * @package WM\Base
 */
abstract class BitrixInstances
{
    /**
     * @var instance for static singleton call
     */
    protected static $instance = null;

    /**
     * @return mixed
     */
    abstract static function setInstance();

    /**
     * Returns object of current class
     *
     * @return Object
     *
     * @access public
     */
    public static function get()
    {
        static::setInstance();

        return static::$instance;
    }
}