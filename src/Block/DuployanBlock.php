<?php

namespace zepi\Unicode\Block;

class DuployanBlock extends AbstractBlock
{
    protected string $key = 'Duployan';
    protected array $names = [
        'en' => 'Duployan',
        'de' => 'Duployé-Kurzschrift',
    ];
    protected int $blockStart = 0x1BC00;
    protected int $blockEnd = 0x1BC9F;
    protected string $regex = '/[\x{1BC00}-\x{1BC9F}]/u';
}