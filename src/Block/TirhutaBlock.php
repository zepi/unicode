<?php

namespace zepi\Unicode\Block;

class TirhutaBlock extends AbstractBlock
{
    protected string $key = 'Tirhuta';
    protected array $names = [
        'en' => 'Tirhuta',
        'de' => 'Tirhuta',
    ];
    protected int $blockStart = 0x11480;
    protected int $blockEnd = 0x114DF;
    protected string $regex = '/[\x{11480}-\x{114DF}]/u';
}