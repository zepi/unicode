<?php

namespace zepi\Unicode\Block;

class LimbuBlock extends AbstractBlock
{
    protected string $key = 'Limbu';
    protected array $names = [
        'en' => 'Limbu',
        'de' => 'Limbu',
    ];
    protected int $blockStart = 0x1900;
    protected int $blockEnd = 0x194F;
    protected string $regex = '/[\x{1900}-\x{194F}]/u';
}