<?php

namespace zepi\Unicode\Block;

class LinearBSyllabaryBlock extends AbstractBlock
{
    protected string $key = 'LinearBSyllabary';
    protected array $names = [
        'en' => 'Linear B Syllabary',
        'de' => 'Linear-B-Silbenzeichen',
    ];
    protected int $blockStart = 0x10000;
    protected int $blockEnd = 0x1007F;
    protected string $regex = '/[\x{10000}-\x{1007F}]/u';
}