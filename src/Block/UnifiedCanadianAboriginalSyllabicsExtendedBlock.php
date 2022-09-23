<?php

namespace zepi\Unicode\Block;

class UnifiedCanadianAboriginalSyllabicsExtendedBlock extends AbstractBlock
{
    protected string $key = 'UnifiedCanadianAboriginalSyllabicsExtended';
    protected array $names = [
        'en' => 'Unified Canadian Aboriginal Syllabics Extended',
        'de' => 'Vereinh. Silbenz. kanad. Ureinw., erw.',
    ];
    protected int $blockStart = 0x18B0;
    protected int $blockEnd = 0x18FF;
    protected string $regex = '/[\x{18B0}-\x{18FF}]/u';
}