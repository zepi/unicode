<?php

namespace zepi\Unicode\Block;

class CherokeeBlock extends AbstractBlock
{
    protected string $key = 'Cherokee';
    protected array $names = [
        'en' => 'Cherokee',
        'de' => 'Cherokee',
    ];
    protected int $blockStart = 0x13A0;
    protected int $blockEnd = 0x13FF;
    protected string $regex = '/[\x{13A0}-\x{13FF}]/u';
}