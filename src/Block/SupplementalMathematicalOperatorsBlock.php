<?php

namespace zepi\Unicode\Block;

class SupplementalMathematicalOperatorsBlock extends AbstractBlock
{
    protected string $key = 'SupplementalMathematicalOperators';
    protected array $names = [
        'en' => 'Supplemental Mathematical Operators',
        'de' => 'Zusätzliche Mathematische Operatoren',
    ];
    protected int $blockStart = 0x2A00;
    protected int $blockEnd = 0x2AFF;
    protected string $regex = '/[\x{2A00}-\x{2AFF}]/u';
}