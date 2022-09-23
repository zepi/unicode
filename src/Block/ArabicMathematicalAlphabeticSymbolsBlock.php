<?php

namespace zepi\Unicode\Block;

class ArabicMathematicalAlphabeticSymbolsBlock extends AbstractBlock
{
    protected string $key = 'ArabicMathematicalAlphabeticSymbols';
    protected array $names = [
        'en' => 'Arabic Mathematical Alphabetic Symbols',
        'de' => 'Arabische mathem. alphanum. Symbole',
    ];
    protected int $blockStart = 0x1EE00;
    protected int $blockEnd = 0x1EEFF;
    protected string $regex = '/[\x{1EE00}-\x{1EEFF}]/u';
}