<?php

namespace zepi\Unicode\Block;

class EthiopicBlock extends AbstractBlock
{
    protected string $key = 'Ethiopic';
    protected array $names = [
        'en' => 'Ethiopic',
        'de' => 'Äthiopisch',
    ];
    protected int $blockStart = 0x1200;
    protected int $blockEnd = 0x137F;
    protected string $regex = '/[\x{1200}-\x{137F}]/u';
}