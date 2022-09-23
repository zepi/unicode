<?php

namespace zepi\Unicode\Block;

class HangulCompatibilityJamoBlock extends AbstractBlock
{
    protected string $key = 'HangulCompatibilityJamo';
    protected array $names = [
        'en' => 'Hangul Compatibility Jamo',
        'de' => 'Hangeul-Jamo, Kompatibilität',
    ];
    protected int $blockStart = 0x3130;
    protected int $blockEnd = 0x318F;
    protected string $regex = '/[\x{3130}-\x{318F}]/u';
}