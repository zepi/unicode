<?php

namespace zepi\Unicode\Block;

class ThaanaBlock extends AbstractBlock
{
    protected string $key = 'Thaana';
    protected array $names = [
        'en' => 'Thaana',
        'de' => 'Thaana',
    ];
    protected int $blockStart = 0x0780;
    protected int $blockEnd = 0x07BF;
    protected string $regex = '/[\x{0780}-\x{07BF}]/u';
}