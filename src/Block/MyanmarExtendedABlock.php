<?php

namespace zepi\Unicode\Block;

class MyanmarExtendedABlock extends AbstractBlock
{
    protected string $key = 'MyanmarExtendedA';
    protected array $names = [
        'en' => 'Myanmar Extended-A',
        'de' => 'Birmanisch, erweitert-A',
    ];
    protected int $blockStart = 0xAA60;
    protected int $blockEnd = 0xAA7F;
    protected string $regex = '/[\x{AA60}-\x{AA7F}]/u';
}