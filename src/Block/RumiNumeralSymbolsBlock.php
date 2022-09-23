<?php

namespace zepi\Unicode\Block;

class RumiNumeralSymbolsBlock extends AbstractBlock
{
    protected string $key = 'RumiNumeralSymbols';
    protected array $names = [
        'en' => 'Rumi Numeral Symbols',
        'de' => 'Rumi-Ziffern',
    ];
    protected int $blockStart = 0x10E60;
    protected int $blockEnd = 0x10E7F;
    protected string $regex = '/[\x{10E60}-\x{10E7F}]/u';
}