<?php

namespace zepi\Unicode\Block;

class EthiopicExtendedABlock extends AbstractBlock
{
    protected string $key = 'EthiopicExtendedA';
    protected array $names = [
        'en' => 'Ethiopic Extended-A',
        'de' => 'Äthiopisch, erweitert-A',
    ];
    protected int $blockStart = 0xAB00;
    protected int $blockEnd = 0xAB2F;
    protected string $regex = '/[\x{AB00}-\x{AB2F}]/u';
}