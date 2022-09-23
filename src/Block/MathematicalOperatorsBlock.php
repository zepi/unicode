<?php

namespace zepi\Unicode\Block;

class MathematicalOperatorsBlock extends AbstractBlock
{
    protected string $key = 'MathematicalOperators';
    protected array $names = [
        'en' => 'Mathematical Operators',
        'de' => 'Mathematische Operatoren',
    ];
    protected int $blockStart = 0x2200;
    protected int $blockEnd = 0x22FF;
    protected string $regex = '/[\x{2200}-\x{22FF}]/u';
}