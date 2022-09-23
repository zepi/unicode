<?php

namespace zepi\Unicode\Block;

class HangulJamoBlock extends AbstractBlock
{
    protected string $key = 'HangulJamo';
    protected array $names = [
        'en' => 'Hangul Jamo',
        'de' => 'Hangeul-Jamo',
    ];
    protected int $blockStart = 0x1100;
    protected int $blockEnd = 0x11FF;
    protected string $regex = '/[\x{1100}-\x{11FF}]/u';
}