<?php

namespace zepi\Unicode\Block;

class ArabicSupplementBlock extends AbstractBlock
{
    protected string $key = 'ArabicSupplement';
    protected array $names = [
        'en' => 'Arabic Supplement',
        'de' => 'Arabisch, Ergänzung',
    ];
    protected int $blockStart = 0x0750;
    protected int $blockEnd = 0x077F;
    protected string $regex = '/[\x{0750}-\x{077F}]/u';
}