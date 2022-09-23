<?php

namespace zepi\Unicode\Block;

class SpecialsBlock extends AbstractBlock
{
    protected string $key = 'Specials';
    protected array $names = [
        'en' => 'Specials',
        'de' => 'Spezielles',
    ];
    protected int $blockStart = 0xFFF0;
    protected int $blockEnd = 0xFFFF;
    protected string $regex = '/[\x{FFF0}-\x{FFFF}]/u';
}