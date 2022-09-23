<?php

namespace zepi\Unicode\Block;

class ArmenianBlock extends AbstractBlock
{
    protected string $key = 'Armenian';
    protected array $names = [
        'en' => 'Armenian',
        'de' => 'Armenisch',
    ];
    protected int $blockStart = 0x0530;
    protected int $blockEnd = 0x058F;
    protected string $regex = '/[\x{0530}-\x{058F}]/u';
}