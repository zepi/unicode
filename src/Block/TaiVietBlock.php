<?php

namespace zepi\Unicode\Block;

class TaiVietBlock extends AbstractBlock
{
    protected string $key = 'TaiViet';
    protected array $names = [
        'en' => 'Tai Viet',
        'de' => 'Tai Viet',
    ];
    protected int $blockStart = 0xAA80;
    protected int $blockEnd = 0xAADF;
    protected string $regex = '/[\x{AA80}-\x{AADF}]/u';
}