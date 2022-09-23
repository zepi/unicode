<?php

namespace zepi\Unicode\Block;

class MroBlock extends AbstractBlock
{
    protected string $key = 'Mro';
    protected array $names = [
        'en' => 'Mro',
        'de' => 'Mro',
    ];
    protected int $blockStart = 0x16A40;
    protected int $blockEnd = 0x16A6F;
    protected string $regex = '/[\x{16A40}-\x{16A6F}]/u';
}