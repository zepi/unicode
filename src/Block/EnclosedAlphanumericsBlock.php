<?php

namespace zepi\Unicode\Block;

class EnclosedAlphanumericsBlock extends AbstractBlock
{
    protected string $key = 'EnclosedAlphanumerics';
    protected array $names = [
        'en' => 'Enclosed Alphanumerics',
        'de' => 'Umschlossene alphanumerische Zeichen',
    ];
    protected int $blockStart = 0x2460;
    protected int $blockEnd = 0x24FF;
    protected string $regex = '/[\x{2460}-\x{24FF}]/u';
}