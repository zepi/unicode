<?php

namespace zepi\Unicode\Block;

class CyrillicBlock extends AbstractBlock
{
    protected string $key = 'Cyrillic';
    protected array $names = [
        'en' => 'Cyrillic',
        'de' => 'Kyrillisch',
    ];
    protected int $blockStart = 0x0400;
    protected int $blockEnd = 0x04FF;
    protected string $regex = '/[\x{0400}-\x{04FF}]/u';
}