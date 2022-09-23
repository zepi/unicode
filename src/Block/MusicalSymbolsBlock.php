<?php

namespace zepi\Unicode\Block;

class MusicalSymbolsBlock extends AbstractBlock
{
    protected string $key = 'MusicalSymbols';
    protected array $names = [
        'en' => 'Musical Symbols',
        'de' => 'Notenschriftzeichen',
    ];
    protected int $blockStart = 0x1D100;
    protected int $blockEnd = 0x1D1FF;
    protected string $regex = '/[\x{1D100}-\x{1D1FF}]/u';
}