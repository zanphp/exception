<?php

namespace Zan\Framework\Foundation\Exception;

use Psr\Log\LogLevel;

class ConditionException extends ZanException
{
    public $logLevel = LogLevel::ERROR;
}