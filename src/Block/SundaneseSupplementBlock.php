<?php

namespace zepi\Unicode\Block;

class SundaneseSupplementBlock extends AbstractBlock
{
    protected string $key = 'SundaneseSupplement';
    protected array $names = [
        'en' => 'Sundanese Supplement',
        'de' => 'Sundanesisch, Ergänzung',
    ];
    protected int $blockStart = 0x1CC0;
    protected int $blockEnd = 0x1CCF;
    protected string $regex = '/[\x{1CC0}-\x{1CCF}]/u';
}