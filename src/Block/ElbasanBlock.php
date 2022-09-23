<?php

namespace zepi\Unicode\Block;

class ElbasanBlock extends AbstractBlock
{
    protected string $key = 'Elbasan';
    protected array $names = [
        'en' => 'Elbasan',
        'de' => 'Albanisch',
    ];
    protected int $blockStart = 0x10500;
    protected int $blockEnd = 0x1052F;
    protected string $regex = '/[\x{10500}-\x{1052F}]/u';
}