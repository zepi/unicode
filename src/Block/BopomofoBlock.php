<?php

namespace zepi\Unicode\Block;

class BopomofoBlock extends AbstractBlock
{
    protected string $key = 'Bopomofo';
    protected array $names = [
        'en' => 'Bopomofo',
        'de' => 'Bopomofo',
    ];
    protected int $blockStart = 0x3100;
    protected int $blockEnd = 0x312F;
    protected string $regex = '/[\x{3100}-\x{312F}]/u';
}