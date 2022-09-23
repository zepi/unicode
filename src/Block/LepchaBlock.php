<?php

namespace zepi\Unicode\Block;

class LepchaBlock extends AbstractBlock
{
    protected string $key = 'Lepcha';
    protected array $names = [
        'en' => 'Lepcha',
        'de' => 'Lepcha',
    ];
    protected int $blockStart = 0x1C00;
    protected int $blockEnd = 0x1C4F;
    protected string $regex = '/[\x{1C00}-\x{1C4F}]/u';
}