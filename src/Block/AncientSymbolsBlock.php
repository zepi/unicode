<?php

namespace zepi\Unicode\Block;

class AncientSymbolsBlock extends AbstractBlock
{
    protected string $key = 'AncientSymbols';
    protected array $names = [
        'en' => 'Ancient Symbols',
        'de' => 'Alte Symbole',
    ];
    protected int $blockStart = 0x10190;
    protected int $blockEnd = 0x101CF;
    protected string $regex = '/[\x{10190}-\x{101CF}]/u';
}