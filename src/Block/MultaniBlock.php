<?php

namespace zepi\Unicode\Block;

class MultaniBlock extends AbstractBlock
{
    protected string $key = 'Multani';
    protected array $names = [
        'en' => 'Multani',
        'de' => 'Multanisch',
    ];
    protected int $blockStart = 0x11280;
    protected int $blockEnd = 0x112AF;
    protected string $regex = '/[\x{11280}-\x{112AF}]/u';
}