<?php

namespace zepi\Unicode\Block;

class TaiThamBlock extends AbstractBlock
{
    protected string $key = 'TaiTham';
    protected array $names = [
        'en' => 'Tai Tham',
        'de' => 'Lanna',
    ];
    protected int $blockStart = 0x1A20;
    protected int $blockEnd = 0x1AAF;
    protected string $regex = '/[\x{1A20}-\x{1AAF}]/u';
}