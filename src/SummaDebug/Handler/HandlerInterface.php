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

namespace v18\SummaDebug\Handler;

interface HandlerInterface
{
    /**
     * @param \Exception $exception
     * @return mixed
     */
    public static function handleError(\Exception $exception);
}