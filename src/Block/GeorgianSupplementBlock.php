<?php

namespace zepi\Unicode\Block;

class GeorgianSupplementBlock extends AbstractBlock
{
    protected string $key = 'GeorgianSupplement';
    protected array $names = [
        'en' => 'Georgian Supplement',
        'de' => 'Georgisch, Ergänzung',
    ];
    protected int $blockStart = 0x2D00;
    protected int $blockEnd = 0x2D2F;
    protected string $regex = '/[\x{2D00}-\x{2D2F}]/u';
}