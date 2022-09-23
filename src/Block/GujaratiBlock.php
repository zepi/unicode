<?php

namespace zepi\Unicode\Block;

class GujaratiBlock extends AbstractBlock
{
    protected string $key = 'Gujarati';
    protected array $names = [
        'en' => 'Gujarati',
        'de' => 'Gujarati',
    ];
    protected int $blockStart = 0x0A80;
    protected int $blockEnd = 0x0AFF;
    protected string $regex = '/[\x{0A80}-\x{0AFF}]/u';
}