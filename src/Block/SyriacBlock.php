<?php

namespace zepi\Unicode\Block;

class SyriacBlock extends AbstractBlock
{
    protected string $key = 'Syriac';
    protected array $names = [
        'en' => 'Syriac',
        'de' => 'Syrisch',
    ];
    protected int $blockStart = 0x0700;
    protected int $blockEnd = 0x074F;
    protected string $regex = '/[\x{0700}-\x{074F}]/u';
}