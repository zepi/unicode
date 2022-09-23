<?php

namespace zepi\Unicode\Block;

class YiRadicalsBlock extends AbstractBlock
{
    protected string $key = 'YiRadicals';
    protected array $names = [
        'en' => 'Yi Radicals',
        'de' => 'Yi-Radikale',
    ];
    protected int $blockStart = 0xA490;
    protected int $blockEnd = 0xA4CF;
    protected string $regex = '/[\x{A490}-\x{A4CF}]/u';
}