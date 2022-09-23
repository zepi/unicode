<?php

namespace zepi\Unicode\Block;

class EnclosedAlphanumericSupplementBlock extends AbstractBlock
{
    protected string $key = 'EnclosedAlphanumericSupplement';
    protected array $names = [
        'en' => 'Enclosed Alphanumeric Supplement',
        'de' => 'Zusätzliche umschlossene alphanumerische Zeichen',
    ];
    protected int $blockStart = 0x1F100;
    protected int $blockEnd = 0x1F1FF;
    protected string $regex = '/[\x{1F100}-\x{1F1FF}]/u';
}