<?php

namespace zepi\Unicode\Block;

class HebrewBlock extends AbstractBlock
{
    protected string $key = 'Hebrew';
    protected array $names = [
        'en' => 'Hebrew',
        'de' => 'Hebräisch',
    ];
    protected int $blockStart = 0x0590;
    protected int $blockEnd = 0x05FF;
    protected string $regex = '/[\x{0590}-\x{05FF}]/u';
}