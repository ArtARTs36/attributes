<?php

namespace CmdWrapper\Wrapper\Attributes;

#[\Attribute]
class EqualsCommand
{
    public function __construct(
        public string $rawCommand,
    ) {
        //
    }
}
