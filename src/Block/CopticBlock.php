<?php

namespace zepi\Unicode\Block;

class CopticBlock extends AbstractBlock
{
    protected string $key = 'Coptic';
    protected array $names = [
        'en' => 'Coptic',
        'de' => 'Koptisch',
    ];
    protected int $blockStart = 0x2C80;
    protected int $blockEnd = 0x2CFF;
    protected string $regex = '/[\x{2C80}-\x{2CFF}]/u';
}