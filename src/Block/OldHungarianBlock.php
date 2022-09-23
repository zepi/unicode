<?php

namespace zepi\Unicode\Block;

class OldHungarianBlock extends AbstractBlock
{
    protected string $key = 'OldHungarian';
    protected array $names = [
        'en' => 'Old Hungarian',
        'de' => 'Altungarisch',
    ];
    protected int $blockStart = 0x10C80;
    protected int $blockEnd = 0x10CFF;
    protected string $regex = '/[\x{10C80}-\x{10CFF}]/u';
}