<?php

namespace zepi\Unicode\Block;

class CombiningDiacriticalMarksforSymbolsBlock extends AbstractBlock
{
    protected string $key = 'CombiningDiacriticalMarksforSymbols';
    protected array $names = [
        'en' => 'Combining Diacritical Marks for Symbols',
        'de' => 'Komb. diakr. Zeichen für Symbole',
    ];
    protected int $blockStart = 0x20D0;
    protected int $blockEnd = 0x20FF;
    protected string $regex = '/[\x{20D0}-\x{20FF}]/u';
}