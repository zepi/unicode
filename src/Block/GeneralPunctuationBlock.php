<?php

namespace zepi\Unicode\Block;

class GeneralPunctuationBlock extends AbstractBlock
{
    protected string $key = 'GeneralPunctuation';
    protected array $names = [
        'en' => 'General Punctuation',
        'de' => 'Allgemeine Interpunktion',
    ];
    protected int $blockStart = 0x2000;
    protected int $blockEnd = 0x206F;
    protected string $regex = '/[\x{2000}-\x{206F}]/u';
}