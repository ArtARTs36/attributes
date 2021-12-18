<?php

namespace CmdWrapper\Wrapper\Attributes;

#[\Attribute(\Attribute::TARGET_METHOD)]
class CommandNamespace
{
    public function __construct(public string $namespace)
    {
        //
    }
}
