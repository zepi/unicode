<?php

namespace zepi\Unicode\Block;

class SupplementalSymbolsandPictographsBlock extends AbstractBlock
{
    protected string $key = 'SupplementalSymbolsandPictographs';
    protected array $names = [
        'en' => 'Supplemental Symbols and Pictographs',
        'de' => 'Zusätzliche piktografische Symbole',
    ];
    protected int $blockStart = 0x1F900;
    protected int $blockEnd = 0x1F9FF;
    protected string $regex = '/[\x{1F900}-\x{1F9FF}]/u';
}