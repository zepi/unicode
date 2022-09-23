<?php

namespace zepi\Unicode\Block;

class TeluguBlock extends AbstractBlock
{
    protected string $key = 'Telugu';
    protected array $names = [
        'en' => 'Telugu',
        'de' => 'Telugu',
    ];
    protected int $blockStart = 0x0C00;
    protected int $blockEnd = 0x0C7F;
    protected string $regex = '/[\x{0C00}-\x{0C7F}]/u';
}