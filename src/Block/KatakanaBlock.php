<?php

namespace zepi\Unicode\Block;

class KatakanaBlock extends AbstractBlock
{
    protected string $key = 'Katakana';
    protected array $names = [
        'en' => 'Katakana',
        'de' => 'Katakana',
    ];
    protected int $blockStart = 0x30A0;
    protected int $blockEnd = 0x30FF;
    protected string $regex = '/[\x{30A0}-\x{30FF}]/u';
}