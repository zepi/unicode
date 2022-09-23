<?php

namespace zepi\Unicode\Block;

class HangulSyllablesBlock extends AbstractBlock
{
    protected string $key = 'HangulSyllables';
    protected array $names = [
        'en' => 'Hangul Syllables',
        'de' => 'Hangeul-Silbenzeichen',
    ];
    protected int $blockStart = 0xAC00;
    protected int $blockEnd = 0xD7AF;
    protected string $regex = '/[\x{AC00}-\x{D7AF}]/u';
}