<?php

namespace zepi\Unicode\Block;

class MiscellaneousSymbolsandArrowsBlock extends AbstractBlock
{
    protected string $key = 'MiscellaneousSymbolsandArrows';
    protected array $names = [
        'en' => 'Miscellaneous Symbols and Arrows',
        'de' => 'Verschiedene Symbole und Pfeile',
    ];
    protected int $blockStart = 0x2B00;
    protected int $blockEnd = 0x2BFF;
    protected string $regex = '/[\x{2B00}-\x{2BFF}]/u';
}