<?php

namespace zepi\Unicode\Block;

class CherokeeSupplementBlock extends AbstractBlock
{
    protected string $key = 'CherokeeSupplement';
    protected array $names = [
        'en' => 'Cherokee Supplement',
        'de' => 'Cherokee, Ergänzung',
    ];
    protected int $blockStart = 0xAB70;
    protected int $blockEnd = 0xABBF;
    protected string $regex = '/[\x{AB70}-\x{ABBF}]/u';
}