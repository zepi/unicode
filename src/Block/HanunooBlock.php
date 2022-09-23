<?php

namespace zepi\Unicode\Block;

class HanunooBlock extends AbstractBlock
{
    protected string $key = 'Hanunoo';
    protected array $names = [
        'en' => 'Hanunoo',
        'de' => 'Hanunóo',
    ];
    protected int $blockStart = 0x1720;
    protected int $blockEnd = 0x173F;
    protected string $regex = '/[\x{1720}-\x{173F}]/u';
}