<?php

namespace zepi\Unicode\Block;

class GurmukhiBlock extends AbstractBlock
{
    protected string $key = 'Gurmukhi';
    protected array $names = [
        'en' => 'Gurmukhi',
        'de' => 'Gurmukhi',
    ];
    protected int $blockStart = 0x0A00;
    protected int $blockEnd = 0x0A7F;
    protected string $regex = '/[\x{0A00}-\x{0A7F}]/u';
}