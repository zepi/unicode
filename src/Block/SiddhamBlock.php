<?php

namespace zepi\Unicode\Block;

class SiddhamBlock extends AbstractBlock
{
    protected string $key = 'Siddham';
    protected array $names = [
        'en' => 'Siddham',
        'de' => 'Siddham',
    ];
    protected int $blockStart = 0x11580;
    protected int $blockEnd = 0x115FF;
    protected string $regex = '/[\x{11580}-\x{115FF}]/u';
}