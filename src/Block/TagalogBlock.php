<?php

namespace zepi\Unicode\Block;

class TagalogBlock extends AbstractBlock
{
    protected string $key = 'Tagalog';
    protected array $names = [
        'en' => 'Tagalog',
        'de' => 'Tagalog',
    ];
    protected int $blockStart = 0x1700;
    protected int $blockEnd = 0x171F;
    protected string $regex = '/[\x{1700}-\x{171F}]/u';
}