<?php

return [
    \ZanPHP\Exception\ZanException::class       => "\\Zan\\Framework\\Foundation\\Exception\\ZanException",
    \ZanPHP\Exception\SystemException::class    => "\\Zan\\Framework\\Foundation\\Exception\\SystemException",
    \ZanPHP\Exception\BusinessException::class  => "\\Zan\\Framework\\Foundation\\Exception\\BusinessException",
    \ZanPHP\Exception\ConditionException::class => "\\Zan\\Framework\\Foundation\\Exception\\ConditionException",

    \ZanPHP\Exception\System\ErrorException::class              => "\\Zan\\Framework\\Foundation\\Exception\\System\\ErrorException",
    \ZanPHP\Exception\System\ClassNotFoundException::class      => "\\Zan\\Framework\\Foundation\\Exception\\System\\ClassNotFoundException",
    \ZanPHP\Exception\System\FileNotFoundException::class       => "\\Zan\\Framework\\Foundation\\Exception\\System\\FileNotFoundException",
    \ZanPHP\Exception\System\InvalidArgumentException::class    => "\\Zan\\Framework\\Foundation\\Exception\\System\\InvalidArgumentException",
];