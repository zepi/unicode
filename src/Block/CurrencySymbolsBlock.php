<?php

namespace zepi\Unicode\Block;

class CurrencySymbolsBlock extends AbstractBlock
{
    protected string $key = 'CurrencySymbols';
    protected array $names = [
        'en' => 'Currency Symbols',
        'de' => 'Währungszeichen',
    ];
    protected int $blockStart = 0x20A0;
    protected int $blockEnd = 0x20CF;
    protected string $regex = '/[\x{20A0}-\x{20CF}]/u';
}