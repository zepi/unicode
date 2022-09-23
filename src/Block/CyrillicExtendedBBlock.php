<?php

namespace zepi\Unicode\Block;

class CyrillicExtendedBBlock extends AbstractBlock
{
    protected string $key = 'CyrillicExtendedB';
    protected array $names = [
        'en' => 'Cyrillic Extended-B',
        'de' => 'Kyrillisch, erweitert-B',
    ];
    protected int $blockStart = 0xA640;
    protected int $blockEnd = 0xA69F;
    protected string $regex = '/[\x{A640}-\x{A69F}]/u';
}