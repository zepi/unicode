<?php

namespace zepi\Unicode\Block;

class InscriptionalPahlaviBlock extends AbstractBlock
{
    protected string $key = 'InscriptionalPahlavi';
    protected array $names = [
        'en' => 'Inscriptional Pahlavi',
        'de' => 'Inschriften-Pahlavi',
    ];
    protected int $blockStart = 0x10B60;
    protected int $blockEnd = 0x10B7F;
    protected string $regex = '/[\x{10B60}-\x{10B7F}]/u';
}