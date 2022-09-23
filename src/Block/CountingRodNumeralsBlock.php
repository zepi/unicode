<?php

namespace zepi\Unicode\Block;

class CountingRodNumeralsBlock extends AbstractBlock
{
    protected string $key = 'CountingRodNumerals';
    protected array $names = [
        'en' => 'Counting Rod Numerals',
        'de' => 'Zählstabziffern',
    ];
    protected int $blockStart = 0x1D360;
    protected int $blockEnd = 0x1D37F;
    protected string $regex = '/[\x{1D360}-\x{1D37F}]/u';
}