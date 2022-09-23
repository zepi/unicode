<?php

namespace zepi\Unicode\Block;

class DevanagariBlock extends AbstractBlock
{
    protected string $key = 'Devanagari';
    protected array $names = [
        'en' => 'Devanagari',
        'de' => 'Devanagari',
    ];
    protected int $blockStart = 0x0900;
    protected int $blockEnd = 0x097F;
    protected string $regex = '/[\x{0900}-\x{097F}]/u';
}