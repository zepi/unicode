<?php

namespace zepi\Unicode\Block;

class BamumSupplementBlock extends AbstractBlock
{
    protected string $key = 'BamumSupplement';
    protected array $names = [
        'en' => 'Bamum Supplement',
        'de' => 'Bamum, Ergänzung',
    ];
    protected int $blockStart = 0x16800;
    protected int $blockEnd = 0x16A3F;
    protected string $regex = '/[\x{16800}-\x{16A3F}]/u';
}