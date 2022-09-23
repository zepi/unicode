<?php

namespace zepi\Unicode\Block;

class GothicBlock extends AbstractBlock
{
    protected string $key = 'Gothic';
    protected array $names = [
        'en' => 'Gothic',
        'de' => 'Gotisch',
    ];
    protected int $blockStart = 0x10330;
    protected int $blockEnd = 0x1034F;
    protected string $regex = '/[\x{10330}-\x{1034F}]/u';
}