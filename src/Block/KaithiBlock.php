<?php

namespace zepi\Unicode\Block;

class KaithiBlock extends AbstractBlock
{
    protected string $key = 'Kaithi';
    protected array $names = [
        'en' => 'Kaithi',
        'de' => 'Kaithi',
    ];
    protected int $blockStart = 0x11080;
    protected int $blockEnd = 0x110CF;
    protected string $regex = '/[\x{11080}-\x{110CF}]/u';
}