<?php

namespace zepi\Unicode\Block;

class CombiningDiacriticalMarksBlock extends AbstractBlock
{
    protected string $key = 'CombiningDiacriticalMarks';
    protected array $names = [
        'en' => 'Combining Diacritical Marks',
        'de' => 'Kombinierende diakritische Zeichen',
    ];
    protected int $blockStart = 0x0300;
    protected int $blockEnd = 0x036F;
    protected string $regex = '/[\x{0300}-\x{036F}]/u';
}