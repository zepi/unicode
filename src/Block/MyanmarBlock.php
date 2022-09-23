<?php

namespace zepi\Unicode\Block;

class MyanmarBlock extends AbstractBlock
{
    protected string $key = 'Myanmar';
    protected array $names = [
        'en' => 'Myanmar',
        'de' => 'Birmanisch',
    ];
    protected int $blockStart = 0x1000;
    protected int $blockEnd = 0x109F;
    protected string $regex = '/[\x{1000}-\x{109F}]/u';
}