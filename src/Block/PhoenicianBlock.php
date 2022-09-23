<?php

namespace zepi\Unicode\Block;

class PhoenicianBlock extends AbstractBlock
{
    protected string $key = 'Phoenician';
    protected array $names = [
        'en' => 'Phoenician',
        'de' => 'Phönizisch',
    ];
    protected int $blockStart = 0x10900;
    protected int $blockEnd = 0x1091F;
    protected string $regex = '/[\x{10900}-\x{1091F}]/u';
}