<?php

namespace zepi\Unicode\Block;

class SupplementalPunctuationBlock extends AbstractBlock
{
    protected string $key = 'SupplementalPunctuation';
    protected array $names = [
        'en' => 'Supplemental Punctuation',
        'de' => 'Zusätzliche Interpunktion',
    ];
    protected int $blockStart = 0x2E00;
    protected int $blockEnd = 0x2E7F;
    protected string $regex = '/[\x{2E00}-\x{2E7F}]/u';
}