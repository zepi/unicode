<?php

namespace zepi\Unicode\Block;

class KhmerSymbolsBlock extends AbstractBlock
{
    protected string $key = 'KhmerSymbols';
    protected array $names = [
        'en' => 'Khmer Symbols',
        'de' => 'Khmer-Symbole',
    ];
    protected int $blockStart = 0x19E0;
    protected int $blockEnd = 0x19FF;
    protected string $regex = '/[\x{19E0}-\x{19FF}]/u';
}