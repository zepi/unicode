<?php

namespace zepi\Unicode\Block;

class NewTaiLueBlock extends AbstractBlock
{
    protected string $key = 'NewTaiLue';
    protected array $names = [
        'en' => 'New Tai Lue',
        'de' => 'Neu-Tai-Lue',
    ];
    protected int $blockStart = 0x1980;
    protected int $blockEnd = 0x19DF;
    protected string $regex = '/[\x{1980}-\x{19DF}]/u';
}