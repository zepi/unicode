<?php

namespace zepi\Unicode\Block;

class ChakmaBlock extends AbstractBlock
{
    protected string $key = 'Chakma';
    protected array $names = [
        'en' => 'Chakma',
        'de' => 'Chakma',
    ];
    protected int $blockStart = 0x11100;
    protected int $blockEnd = 0x1114F;
    protected string $regex = '/[\x{11100}-\x{1114F}]/u';
}