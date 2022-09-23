<?php

namespace zepi\Unicode\Block;

class Latin1SupplementBlock extends AbstractBlock
{
    protected string $key = 'Latin1Supplement';
    protected array $names = [
        'en' => 'Latin-1 Supplement',
        'de' => 'Lateinisch-1, Ergänzung',
    ];
    protected int $blockStart = 0x0080;
    protected int $blockEnd = 0x00FF;
    protected string $regex = '/[\x{0080}-\x{00FF}]/u';
}