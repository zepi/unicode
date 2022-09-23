<?php

namespace zepi\Unicode\Block;

class SoraSompengBlock extends AbstractBlock
{
    protected string $key = 'SoraSompeng';
    protected array $names = [
        'en' => 'Sora Sompeng',
        'de' => 'Sorang-Sompeng',
    ];
    protected int $blockStart = 0x110D0;
    protected int $blockEnd = 0x110FF;
    protected string $regex = '/[\x{110D0}-\x{110FF}]/u';
}