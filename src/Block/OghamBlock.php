<?php

namespace zepi\Unicode\Block;

class OghamBlock extends AbstractBlock
{
    protected string $key = 'Ogham';
    protected array $names = [
        'en' => 'Ogham',
        'de' => 'Ogam',
    ];
    protected int $blockStart = 0x1680;
    protected int $blockEnd = 0x169F;
    protected string $regex = '/[\x{1680}-\x{169F}]/u';
}