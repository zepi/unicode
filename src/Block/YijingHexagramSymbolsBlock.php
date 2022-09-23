<?php

namespace zepi\Unicode\Block;

class YijingHexagramSymbolsBlock extends AbstractBlock
{
    protected string $key = 'YijingHexagramSymbols';
    protected array $names = [
        'en' => 'Yijing Hexagram Symbols',
        'de' => 'I-Ging-Hexagramme',
    ];
    protected int $blockStart = 0x4DC0;
    protected int $blockEnd = 0x4DFF;
    protected string $regex = '/[\x{4DC0}-\x{4DFF}]/u';
}