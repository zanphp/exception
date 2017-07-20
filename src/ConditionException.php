<?php

namespace ZanPHP\Exception;

use Psr\Log\LogLevel;

class ConditionException extends ZanException
{
    public $logLevel = LogLevel::ERROR;
}