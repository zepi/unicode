<?php

namespace zepi\Unicode\Block;

class VedicExtensionsBlock extends AbstractBlock
{
    protected string $key = 'VedicExtensions';
    protected array $names = [
        'en' => 'Vedic Extensions',
        'de' => 'Vedische Erweiterungen',
    ];
    protected int $blockStart = 0x1CD0;
    protected int $blockEnd = 0x1CFF;
    protected string $regex = '/[\x{1CD0}-\x{1CFF}]/u';
}