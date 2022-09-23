<?php

namespace zepi\Unicode\Block;

class SupplementaryPrivateUseAreaBBlock extends AbstractBlock
{
    protected string $key = 'SupplementaryPrivateUseAreaB';
    protected array $names = [
        'en' => 'Supplementary Private Use Area-B',
        'de' => 'Supplementary Private Use Area-B',
    ];
    protected int $blockStart = 0x100000;
    protected int $blockEnd = 0x10FFFF;
    protected string $regex = '/[\x{100000}-\x{10FFFF}]/u';
}