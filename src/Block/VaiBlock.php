<?php

namespace zepi\Unicode\Block;

class VaiBlock extends AbstractBlock
{
    protected string $key = 'Vai';
    protected array $names = [
        'en' => 'Vai',
        'de' => 'Vai',
    ];
    protected int $blockStart = 0xA500;
    protected int $blockEnd = 0xA63F;
    protected string $regex = '/[\x{A500}-\x{A63F}]/u';
}