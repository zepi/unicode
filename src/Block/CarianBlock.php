<?php

namespace zepi\Unicode\Block;

class CarianBlock extends AbstractBlock
{
    protected string $key = 'Carian';
    protected array $names = [
        'en' => 'Carian',
        'de' => 'Karisch',
    ];
    protected int $blockStart = 0x102A0;
    protected int $blockEnd = 0x102DF;
    protected string $regex = '/[\x{102A0}-\x{102DF}]/u';
}