<?php

namespace zepi\Unicode\Block;

class MiscellaneousMathematicalSymbolsBBlock extends AbstractBlock
{
    protected string $key = 'MiscellaneousMathematicalSymbolsB';
    protected array $names = [
        'en' => 'Miscellaneous Mathematical Symbols-B',
        'de' => 'Verschiedene mathematische Symbole-B',
    ];
    protected int $blockStart = 0x2980;
    protected int $blockEnd = 0x29FF;
    protected string $regex = '/[\x{2980}-\x{29FF}]/u';
}