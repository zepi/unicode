<?php

namespace zepi\Unicode\Block;

class LydianBlock extends AbstractBlock
{
    protected string $key = 'Lydian';
    protected array $names = [
        'en' => 'Lydian',
        'de' => 'Lydisch',
    ];
    protected int $blockStart = 0x10920;
    protected int $blockEnd = 0x1093F;
    protected string $regex = '/[\x{10920}-\x{1093F}]/u';
}