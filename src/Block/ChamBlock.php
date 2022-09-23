<?php

namespace zepi\Unicode\Block;

class ChamBlock extends AbstractBlock
{
    protected string $key = 'Cham';
    protected array $names = [
        'en' => 'Cham',
        'de' => 'Cham',
    ];
    protected int $blockStart = 0xAA00;
    protected int $blockEnd = 0xAA5F;
    protected string $regex = '/[\x{AA00}-\x{AA5F}]/u';
}