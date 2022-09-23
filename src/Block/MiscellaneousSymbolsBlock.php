<?php

namespace zepi\Unicode\Block;

class MiscellaneousSymbolsBlock extends AbstractBlock
{
    protected string $key = 'MiscellaneousSymbols';
    protected array $names = [
        'en' => 'Miscellaneous Symbols',
        'de' => 'Verschiedene Symbole',
    ];
    protected int $blockStart = 0x2600;
    protected int $blockEnd = 0x26FF;
    protected string $regex = '/[\x{2600}-\x{26FF}]/u';
}