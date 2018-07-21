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

namespace v18\SummaDebug\Handler\PrettyErrors;

use v18\SummaDebug\Handler\EventInterface;
use v18\SummaDebug\Handler\HandlerInterface;

class ExceptionHandler implements HandlerInterface
{
    /**
     * @param \Exception $exception
     * @return mixed|void
     */
    public static function handleError(\Exception $exception)
    {
        echo 'Error:\nAt line:';
        echo $exception->getLine();
        echo PHP_EOL . 'At file:';
        echo $exception->getFile();
        echo PHP_EOL . 'Message: ' . $exception->getMessage() . PHP_EOL;
    }
}