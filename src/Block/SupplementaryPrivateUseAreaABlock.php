<?php

namespace zepi\Unicode\Block;

class SupplementaryPrivateUseAreaABlock extends AbstractBlock
{
    protected string $key = 'SupplementaryPrivateUseAreaA';
    protected array $names = [
        'en' => 'Supplementary Private Use Area-A',
        'de' => 'Supplementary Private Use Area-A',
    ];
    protected int $blockStart = 0xF0000;
    protected int $blockEnd = 0xFFFFF;
    protected string $regex = '/[\x{F0000}-\x{FFFFF}]/u';
}