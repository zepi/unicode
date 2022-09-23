<?php

namespace zepi\Unicode\Block;

class SamaritanBlock extends AbstractBlock
{
    protected string $key = 'Samaritan';
    protected array $names = [
        'en' => 'Samaritan',
        'de' => 'Samaritanisch',
    ];
    protected int $blockStart = 0x0800;
    protected int $blockEnd = 0x083F;
    protected string $regex = '/[\x{0800}-\x{083F}]/u';
}