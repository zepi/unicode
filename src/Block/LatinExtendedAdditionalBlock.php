<?php

namespace zepi\Unicode\Block;

class LatinExtendedAdditionalBlock extends AbstractBlock
{
    protected string $key = 'LatinExtendedAdditional';
    protected array $names = [
        'en' => 'Latin Extended Additional',
        'de' => 'Lateinisch, weiterer Zusatz',
    ];
    protected int $blockStart = 0x1E00;
    protected int $blockEnd = 0x1EFF;
    protected string $regex = '/[\x{1E00}-\x{1EFF}]/u';
}