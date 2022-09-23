<?php

namespace zepi\Unicode\Block;

class OldNorthArabianBlock extends AbstractBlock
{
    protected string $key = 'OldNorthArabian';
    protected array $names = [
        'en' => 'Old North Arabian',
        'de' => 'Altnordarabisch',
    ];
    protected int $blockStart = 0x10A80;
    protected int $blockEnd = 0x10A9F;
    protected string $regex = '/[\x{10A80}-\x{10A9F}]/u';
}