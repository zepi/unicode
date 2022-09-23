<?php

namespace zepi\Unicode\Block;

class NabataeanBlock extends AbstractBlock
{
    protected string $key = 'Nabataean';
    protected array $names = [
        'en' => 'Nabataean',
        'de' => 'Nabatäisch',
    ];
    protected int $blockStart = 0x10880;
    protected int $blockEnd = 0x108AF;
    protected string $regex = '/[\x{10880}-\x{108AF}]/u';
}