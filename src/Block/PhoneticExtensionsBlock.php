<?php

namespace zepi\Unicode\Block;

class PhoneticExtensionsBlock extends AbstractBlock
{
    protected string $key = 'PhoneticExtensions';
    protected array $names = [
        'en' => 'Phonetic Extensions',
        'de' => 'Phonetische Erweiterungen',
    ];
    protected int $blockStart = 0x1D00;
    protected int $blockEnd = 0x1D7F;
    protected string $regex = '/[\x{1D00}-\x{1D7F}]/u';
}