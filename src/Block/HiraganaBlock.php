<?php

namespace zepi\Unicode\Block;

class HiraganaBlock extends AbstractBlock
{
    protected string $key = 'Hiragana';
    protected array $names = [
        'en' => 'Hiragana',
        'de' => 'Hiragana',
    ];
    protected int $blockStart = 0x3040;
    protected int $blockEnd = 0x309F;
    protected string $regex = '/[\x{3040}-\x{309F}]/u';
}