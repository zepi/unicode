<?php

namespace zepi\Unicode\Block;

class LycianBlock extends AbstractBlock
{
    protected string $key = 'Lycian';
    protected array $names = [
        'en' => 'Lycian',
        'de' => 'Lykisch',
    ];
    protected int $blockStart = 0x10280;
    protected int $blockEnd = 0x1029F;
    protected string $regex = '/[\x{10280}-\x{1029F}]/u';
}