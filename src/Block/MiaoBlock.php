<?php

namespace zepi\Unicode\Block;

class MiaoBlock extends AbstractBlock
{
    protected string $key = 'Miao';
    protected array $names = [
        'en' => 'Miao',
        'de' => 'Pollard-Schrift (Miao)',
    ];
    protected int $blockStart = 0x16F00;
    protected int $blockEnd = 0x16F9F;
    protected string $regex = '/[\x{16F00}-\x{16F9F}]/u';
}