<?php

namespace zepi\Unicode\Block;

class GreekandCopticBlock extends AbstractBlock
{
    protected string $key = 'GreekandCoptic';
    protected array $names = [
        'en' => 'Greek and Coptic',
        'de' => 'Griechisch und Koptisch',
    ];
    protected int $blockStart = 0x0370;
    protected int $blockEnd = 0x03FF;
    protected string $regex = '/[\x{0370}-\x{03FF}]/u';
}