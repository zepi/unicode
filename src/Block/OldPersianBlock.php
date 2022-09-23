<?php

namespace zepi\Unicode\Block;

class OldPersianBlock extends AbstractBlock
{
    protected string $key = 'OldPersian';
    protected array $names = [
        'en' => 'Old Persian',
        'de' => 'Altpersisch',
    ];
    protected int $blockStart = 0x103A0;
    protected int $blockEnd = 0x103DF;
    protected string $regex = '/[\x{103A0}-\x{103DF}]/u';
}