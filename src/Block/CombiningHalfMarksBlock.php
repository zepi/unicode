<?php

namespace zepi\Unicode\Block;

class CombiningHalfMarksBlock extends AbstractBlock
{
    protected string $key = 'CombiningHalfMarks';
    protected array $names = [
        'en' => 'Combining Half Marks',
        'de' => 'Kombinierende halbe diakritische Zeichen',
    ];
    protected int $blockStart = 0xFE20;
    protected int $blockEnd = 0xFE2F;
    protected string $regex = '/[\x{FE20}-\x{FE2F}]/u';
}