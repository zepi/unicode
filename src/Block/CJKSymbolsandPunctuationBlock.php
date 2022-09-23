<?php

namespace zepi\Unicode\Block;

class CJKSymbolsandPunctuationBlock extends AbstractBlock
{
    protected string $key = 'CJKSymbolsandPunctuation';
    protected array $names = [
        'en' => 'CJK Symbols and Punctuation',
        'de' => 'CJK-Symbole und -Interpunktion',
    ];
    protected int $blockStart = 0x3000;
    protected int $blockEnd = 0x303F;
    protected string $regex = '/[\x{3000}-\x{303F}]/u';
}