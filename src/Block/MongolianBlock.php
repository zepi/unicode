<?php

namespace zepi\Unicode\Block;

class MongolianBlock extends AbstractBlock
{
    protected string $key = 'Mongolian';
    protected array $names = [
        'en' => 'Mongolian',
        'de' => 'Mongolisch',
    ];
    protected int $blockStart = 0x1800;
    protected int $blockEnd = 0x18AF;
    protected string $regex = '/[\x{1800}-\x{18AF}]/u';
}