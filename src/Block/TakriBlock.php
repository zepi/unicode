<?php

namespace zepi\Unicode\Block;

class TakriBlock extends AbstractBlock
{
    protected string $key = 'Takri';
    protected array $names = [
        'en' => 'Takri',
        'de' => 'Takri',
    ];
    protected int $blockStart = 0x11680;
    protected int $blockEnd = 0x116CF;
    protected string $regex = '/[\x{11680}-\x{116CF}]/u';
}