<?php

namespace zepi\Unicode\Block;

class LatinExtendedEBlock extends AbstractBlock
{
    protected string $key = 'LatinExtendedE';
    protected array $names = [
        'en' => 'Latin Extended-E',
        'de' => 'Lateinisch, erweitert-E',
    ];
    protected int $blockStart = 0xAB30;
    protected int $blockEnd = 0xAB6F;
    protected string $regex = '/[\x{AB30}-\x{AB6F}]/u';
}