<?php

namespace zepi\Unicode\Block;

class NKoBlock extends AbstractBlock
{
    protected string $key = 'NKo';
    protected array $names = [
        'en' => 'NKo',
        'de' => 'N’Ko',
    ];
    protected int $blockStart = 0x07C0;
    protected int $blockEnd = 0x07FF;
    protected string $regex = '/[\x{07C0}-\x{07FF}]/u';
}