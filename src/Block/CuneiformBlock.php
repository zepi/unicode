<?php

namespace zepi\Unicode\Block;

class CuneiformBlock extends AbstractBlock
{
    protected string $key = 'Cuneiform';
    protected array $names = [
        'en' => 'Cuneiform',
        'de' => 'Keilschrift',
    ];
    protected int $blockStart = 0x12000;
    protected int $blockEnd = 0x123FF;
    protected string $regex = '/[\x{12000}-\x{123FF}]/u';
}