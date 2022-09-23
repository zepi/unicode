<?php

namespace zepi\Unicode\Block;

class BugineseBlock extends AbstractBlock
{
    protected string $key = 'Buginese';
    protected array $names = [
        'en' => 'Buginese',
        'de' => 'Buginesisch',
    ];
    protected int $blockStart = 0x1A00;
    protected int $blockEnd = 0x1A1F;
    protected string $regex = '/[\x{1A00}-\x{1A1F}]/u';
}