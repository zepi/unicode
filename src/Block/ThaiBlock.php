<?php

namespace zepi\Unicode\Block;

class ThaiBlock extends AbstractBlock
{
    protected string $key = 'Thai';
    protected array $names = [
        'en' => 'Thai',
        'de' => 'Thailändisch',
    ];
    protected int $blockStart = 0x0E00;
    protected int $blockEnd = 0x0E7F;
    protected string $regex = '/[\x{0E00}-\x{0E7F}]/u';
}