<?php

namespace zepi\Unicode\Block;

class PrivateUseAreaBlock extends AbstractBlock
{
    protected string $key = 'PrivateUseArea';
    protected array $names = [
        'en' => 'Private Use Area',
        'de' => 'Private Use Zone',
    ];
    protected int $blockStart = 0xE000;
    protected int $blockEnd = 0xF8FF;
    protected string $regex = '/[\x{E000}-\x{F8FF}]/u';
}