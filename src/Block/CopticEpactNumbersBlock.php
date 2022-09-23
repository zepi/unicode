<?php

namespace zepi\Unicode\Block;

class CopticEpactNumbersBlock extends AbstractBlock
{
    protected string $key = 'CopticEpactNumbers';
    protected array $names = [
        'en' => 'Coptic Epact Numbers',
        'de' => 'Koptische Zahlzeichen',
    ];
    protected int $blockStart = 0x102E0;
    protected int $blockEnd = 0x102FF;
    protected string $regex = '/[\x{102E0}-\x{102FF}]/u';
}