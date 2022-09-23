<?php

namespace zepi\Unicode\Block;

class SharadaBlock extends AbstractBlock
{
    protected string $key = 'Sharada';
    protected array $names = [
        'en' => 'Sharada',
        'de' => 'Sharada',
    ];
    protected int $blockStart = 0x11180;
    protected int $blockEnd = 0x111DF;
    protected string $regex = '/[\x{11180}-\x{111DF}]/u';
}