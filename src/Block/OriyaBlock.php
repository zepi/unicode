<?php

namespace zepi\Unicode\Block;

class OriyaBlock extends AbstractBlock
{
    protected string $key = 'Oriya';
    protected array $names = [
        'en' => 'Oriya',
        'de' => 'Oriya',
    ];
    protected int $blockStart = 0x0B00;
    protected int $blockEnd = 0x0B7F;
    protected string $regex = '/[\x{0B00}-\x{0B7F}]/u';
}