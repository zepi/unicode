<?php

namespace zepi\Unicode\Block;

class BengaliBlock extends AbstractBlock
{
    protected string $key = 'Bengali';
    protected array $names = [
        'en' => 'Bengali',
        'de' => 'Bengalisch',
    ];
    protected int $blockStart = 0x0980;
    protected int $blockEnd = 0x09FF;
    protected string $regex = '/[\x{0980}-\x{09FF}]/u';
}