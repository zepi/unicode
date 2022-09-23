<?php

namespace zepi\Unicode\Block;

class OldTurkicBlock extends AbstractBlock
{
    protected string $key = 'OldTurkic';
    protected array $names = [
        'en' => 'Old Turkic',
        'de' => 'Alttürkisch (Orchon-Runen)',
    ];
    protected int $blockStart = 0x10C00;
    protected int $blockEnd = 0x10C4F;
    protected string $regex = '/[\x{10C00}-\x{10C4F}]/u';
}