<?php

namespace zepi\Unicode\Block;

class BassaVahBlock extends AbstractBlock
{
    protected string $key = 'BassaVah';
    protected array $names = [
        'en' => 'Bassa Vah',
        'de' => 'Bassa Vah',
    ];
    protected int $blockStart = 0x16AD0;
    protected int $blockEnd = 0x16AFF;
    protected string $regex = '/[\x{16AD0}-\x{16AFF}]/u';
}