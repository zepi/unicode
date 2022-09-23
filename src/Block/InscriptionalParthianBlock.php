<?php

namespace zepi\Unicode\Block;

class InscriptionalParthianBlock extends AbstractBlock
{
    protected string $key = 'InscriptionalParthian';
    protected array $names = [
        'en' => 'Inscriptional Parthian',
        'de' => 'Parthisch',
    ];
    protected int $blockStart = 0x10B40;
    protected int $blockEnd = 0x10B5F;
    protected string $regex = '/[\x{10B40}-\x{10B5F}]/u';
}