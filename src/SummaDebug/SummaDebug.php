<?php
/**
 *
 * This code is part of SummaDebug system.
 * (c) SummaDebug 2018
 *
 * If you want, you can see license file at https://github.com/v18team/SummaDebug/LICENSE
 *
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */

namespace v18\SummaDebug;

class SummaDebug
{
    static $enabled = false;
    static $handlers = [];

    /**
     * @return bool
     */
    public static function enableDebug(): bool
    {
        if (true === static::$enabled) {
            return false;
        }

        static::$enabled = true;

        if (static::registerHandlers()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return bool
     */
    public static function disableDebug(): bool
    {
        if (false === static::$enabled) {
            return false;
        }

        static::$enabled = false;

        return true;
    }

    /**
     * @return bool
     */
    public static function registerHandlers(): bool
    {
        if (false === static::$enabled) {
            return false;
        }

        set_error_handler('v18\SummaDebug\Handler\PrettyErrors\ErrorHandler::handleError', E_ALL);
        set_exception_handler('v18\SummaDebug\Handler\PrettyErrors\ExceptionHandler::handleError');

        return true;
    }

}
