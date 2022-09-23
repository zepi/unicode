<?php

namespace zepi\Unicode\Block;

class KatakanaPhoneticExtensionsBlock extends AbstractBlock
{
    protected string $key = 'KatakanaPhoneticExtensions';
    protected array $names = [
        'en' => 'Katakana Phonetic Extensions',
        'de' => 'Katakana, Phonetische Erweiterungen',
    ];
    protected int $blockStart = 0x31F0;
    protected int $blockEnd = 0x31FF;
    protected string $regex = '/[\x{31F0}-\x{31FF}]/u';
}