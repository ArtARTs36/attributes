<?php

namespace CmdWrapper\Wrapper\Attributes;

#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class EqualsCommand
{
    public function __construct(
        public string $rawCommand,
    ) {
        //
    }
}
