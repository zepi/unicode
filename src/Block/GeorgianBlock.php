<?php

namespace zepi\Unicode\Block;

class GeorgianBlock extends AbstractBlock
{
    protected string $key = 'Georgian';
    protected array $names = [
        'en' => 'Georgian',
        'de' => 'Georgisch',
    ];
    protected int $blockStart = 0x10A0;
    protected int $blockEnd = 0x10FF;
    protected string $regex = '/[\x{10A0}-\x{10FF}]/u';
}