<?php

namespace zepi\Unicode\Block;

class KhmerBlock extends AbstractBlock
{
    protected string $key = 'Khmer';
    protected array $names = [
        'en' => 'Khmer',
        'de' => 'Khmer',
    ];
    protected int $blockStart = 0x1780;
    protected int $blockEnd = 0x17FF;
    protected string $regex = '/[\x{1780}-\x{17FF}]/u';
}