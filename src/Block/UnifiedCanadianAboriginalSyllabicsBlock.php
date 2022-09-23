<?php

namespace zepi\Unicode\Block;

class UnifiedCanadianAboriginalSyllabicsBlock extends AbstractBlock
{
    protected string $key = 'UnifiedCanadianAboriginalSyllabics';
    protected array $names = [
        'en' => 'Unified Canadian Aboriginal Syllabics',
        'de' => 'Vereinh. Silbenzeichen kanad. Ureinwohner',
    ];
    protected int $blockStart = 0x1400;
    protected int $blockEnd = 0x167F;
    protected string $regex = '/[\x{1400}-\x{167F}]/u';
}