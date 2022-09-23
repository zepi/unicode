<?php

namespace zepi\Unicode\Block;

class OldSouthArabianBlock extends AbstractBlock
{
    protected string $key = 'OldSouthArabian';
    protected array $names = [
        'en' => 'Old South Arabian',
        'de' => 'Altsüdarabisch',
    ];
    protected int $blockStart = 0x10A60;
    protected int $blockEnd = 0x10A7F;
    protected string $regex = '/[\x{10A60}-\x{10A7F}]/u';
}