<?php

namespace zepi\Unicode\Block;

class MahajaniBlock extends AbstractBlock
{
    protected string $key = 'Mahajani';
    protected array $names = [
        'en' => 'Mahajani',
        'de' => 'Mahajani',
    ];
    protected int $blockStart = 0x11150;
    protected int $blockEnd = 0x1117F;
    protected string $regex = '/[\x{11150}-\x{1117F}]/u';
}