<?php

namespace zepi\Unicode\Block;

class ArrowsBlock extends AbstractBlock
{
    protected string $key = 'Arrows';
    protected array $names = [
        'en' => 'Arrows',
        'de' => 'Pfeile',
    ];
    protected int $blockStart = 0x2190;
    protected int $blockEnd = 0x21FF;
    protected string $regex = '/[\x{2190}-\x{21FF}]/u';
}