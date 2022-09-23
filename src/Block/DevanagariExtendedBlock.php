<?php

namespace zepi\Unicode\Block;

class DevanagariExtendedBlock extends AbstractBlock
{
    protected string $key = 'DevanagariExtended';
    protected array $names = [
        'en' => 'Devanagari Extended',
        'de' => 'Devanagari, erweitert',
    ];
    protected int $blockStart = 0xA8E0;
    protected int $blockEnd = 0xA8FF;
    protected string $regex = '/[\x{A8E0}-\x{A8FF}]/u';
}