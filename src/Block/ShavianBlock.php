<?php

namespace zepi\Unicode\Block;

class ShavianBlock extends AbstractBlock
{
    protected string $key = 'Shavian';
    protected array $names = [
        'en' => 'Shavian',
        'de' => 'Shaw-Alphabet',
    ];
    protected int $blockStart = 0x10450;
    protected int $blockEnd = 0x1047F;
    protected string $regex = '/[\x{10450}-\x{1047F}]/u';
}