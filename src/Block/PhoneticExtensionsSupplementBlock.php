<?php

namespace zepi\Unicode\Block;

class PhoneticExtensionsSupplementBlock extends AbstractBlock
{
    protected string $key = 'PhoneticExtensionsSupplement';
    protected array $names = [
        'en' => 'Phonetic Extensions Supplement',
        'de' => 'Phonetische Erweiterungen, Ergänzung',
    ];
    protected int $blockStart = 0x1D80;
    protected int $blockEnd = 0x1DBF;
    protected string $regex = '/[\x{1D80}-\x{1DBF}]/u';
}