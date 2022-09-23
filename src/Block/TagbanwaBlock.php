<?php

namespace zepi\Unicode\Block;

class TagbanwaBlock extends AbstractBlock
{
    protected string $key = 'Tagbanwa';
    protected array $names = [
        'en' => 'Tagbanwa',
        'de' => 'Tagbanuwa',
    ];
    protected int $blockStart = 0x1760;
    protected int $blockEnd = 0x177F;
    protected string $regex = '/[\x{1760}-\x{177F}]/u';
}