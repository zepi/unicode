<?php

namespace zepi\Unicode\Block;

class LatinExtendedABlock extends AbstractBlock
{
    protected string $key = 'LatinExtendedA';
    protected array $names = [
        'en' => 'Latin Extended-A',
        'de' => 'Lateinisch, erweitert-A',
    ];
    protected int $blockStart = 0x0100;
    protected int $blockEnd = 0x017F;
    protected string $regex = '/[\x{0100}-\x{017F}]/u';
}