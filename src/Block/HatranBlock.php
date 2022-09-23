<?php

namespace zepi\Unicode\Block;

class HatranBlock extends AbstractBlock
{
    protected string $key = 'Hatran';
    protected array $names = [
        'en' => 'Hatran',
        'de' => 'Hatra-Schrift',
    ];
    protected int $blockStart = 0x108E0;
    protected int $blockEnd = 0x108FF;
    protected string $regex = '/[\x{108E0}-\x{108FF}]/u';
}