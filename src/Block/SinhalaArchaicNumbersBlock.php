<?php

namespace zepi\Unicode\Block;

class SinhalaArchaicNumbersBlock extends AbstractBlock
{
    protected string $key = 'SinhalaArchaicNumbers';
    protected array $names = [
        'en' => 'Sinhala Archaic Numbers',
        'de' => 'Singhalesische Zahlzeichen',
    ];
    protected int $blockStart = 0x111E0;
    protected int $blockEnd = 0x111FF;
    protected string $regex = '/[\x{111E0}-\x{111FF}]/u';
}