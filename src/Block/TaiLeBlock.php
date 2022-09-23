<?php

namespace zepi\Unicode\Block;

class TaiLeBlock extends AbstractBlock
{
    protected string $key = 'TaiLe';
    protected array $names = [
        'en' => 'Tai Le',
        'de' => 'Tai Le',
    ];
    protected int $blockStart = 0x1950;
    protected int $blockEnd = 0x197F;
    protected string $regex = '/[\x{1950}-\x{197F}]/u';
}