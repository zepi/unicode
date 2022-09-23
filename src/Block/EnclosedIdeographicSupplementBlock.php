<?php

namespace zepi\Unicode\Block;

class EnclosedIdeographicSupplementBlock extends AbstractBlock
{
    protected string $key = 'EnclosedIdeographicSupplement';
    protected array $names = [
        'en' => 'Enclosed Ideographic Supplement',
        'de' => 'Zusätzliche umschlossene CJK-Zeichen',
    ];
    protected int $blockStart = 0x1F200;
    protected int $blockEnd = 0x1F2FF;
    protected string $regex = '/[\x{1F200}-\x{1F2FF}]/u';
}