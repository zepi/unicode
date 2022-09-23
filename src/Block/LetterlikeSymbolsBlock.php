<?php

namespace zepi\Unicode\Block;

class LetterlikeSymbolsBlock extends AbstractBlock
{
    protected string $key = 'LetterlikeSymbols';
    protected array $names = [
        'en' => 'Letterlike Symbols',
        'de' => 'Buchstabenähnliche Symbole',
    ];
    protected int $blockStart = 0x2100;
    protected int $blockEnd = 0x214F;
    protected string $regex = '/[\x{2100}-\x{214F}]/u';
}