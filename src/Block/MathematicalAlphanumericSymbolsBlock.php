<?php

namespace zepi\Unicode\Block;

class MathematicalAlphanumericSymbolsBlock extends AbstractBlock
{
    protected string $key = 'MathematicalAlphanumericSymbols';
    protected array $names = [
        'en' => 'Mathematical Alphanumeric Symbols',
        'de' => 'Mathematische alphanumerische Symbole',
    ];
    protected int $blockStart = 0x1D400;
    protected int $blockEnd = 0x1D7FF;
    protected string $regex = '/[\x{1D400}-\x{1D7FF}]/u';
}