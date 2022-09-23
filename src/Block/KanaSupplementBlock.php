<?php

namespace zepi\Unicode\Block;

class KanaSupplementBlock extends AbstractBlock
{
    protected string $key = 'KanaSupplement';
    protected array $names = [
        'en' => 'Kana Supplement',
        'de' => 'Kana, Ergänzung',
    ];
    protected int $blockStart = 0x1B000;
    protected int $blockEnd = 0x1B0FF;
    protected string $regex = '/[\x{1B000}-\x{1B0FF}]/u';
}