<?php

namespace zepi\Unicode\Block;

class MalayalamBlock extends AbstractBlock
{
    protected string $key = 'Malayalam';
    protected array $names = [
        'en' => 'Malayalam',
        'de' => 'Malayalam',
    ];
    protected int $blockStart = 0x0D00;
    protected int $blockEnd = 0x0D7F;
    protected string $regex = '/[\x{0D00}-\x{0D7F}]/u';
}