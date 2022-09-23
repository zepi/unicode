<?php

namespace zepi\Unicode\Block;

class GlagoliticBlock extends AbstractBlock
{
    protected string $key = 'Glagolitic';
    protected array $names = [
        'en' => 'Glagolitic',
        'de' => 'Glagolitisch',
    ];
    protected int $blockStart = 0x2C00;
    protected int $blockEnd = 0x2C5F;
    protected string $regex = '/[\x{2C00}-\x{2C5F}]/u';
}