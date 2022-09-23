<?php

namespace zepi\Unicode\Block;

class EthiopicSupplementBlock extends AbstractBlock
{
    protected string $key = 'EthiopicSupplement';
    protected array $names = [
        'en' => 'Ethiopic Supplement',
        'de' => 'Äthiopisch, Zusatz',
    ];
    protected int $blockStart = 0x1380;
    protected int $blockEnd = 0x139F;
    protected string $regex = '/[\x{1380}-\x{139F}]/u';
}