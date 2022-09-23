<?php

namespace zepi\Unicode\Block;

class OsmanyaBlock extends AbstractBlock
{
    protected string $key = 'Osmanya';
    protected array $names = [
        'en' => 'Osmanya',
        'de' => 'Osmaniya',
    ];
    protected int $blockStart = 0x10480;
    protected int $blockEnd = 0x104AF;
    protected string $regex = '/[\x{10480}-\x{104AF}]/u';
}