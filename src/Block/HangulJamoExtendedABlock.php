<?php

namespace zepi\Unicode\Block;

class HangulJamoExtendedABlock extends AbstractBlock
{
    protected string $key = 'HangulJamoExtendedA';
    protected array $names = [
        'en' => 'Hangul Jamo Extended-A',
        'de' => 'Hangeul-Jamo, erweitert-A',
    ];
    protected int $blockStart = 0xA960;
    protected int $blockEnd = 0xA97F;
    protected string $regex = '/[\x{A960}-\x{A97F}]/u';
}