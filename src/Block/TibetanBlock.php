<?php

namespace zepi\Unicode\Block;

class TibetanBlock extends AbstractBlock
{
    protected string $key = 'Tibetan';
    protected array $names = [
        'en' => 'Tibetan',
        'de' => 'Tibetisch',
    ];
    protected int $blockStart = 0x0F00;
    protected int $blockEnd = 0x0FFF;
    protected string $regex = '/[\x{0F00}-\x{0FFF}]/u';
}