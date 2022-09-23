<?php

namespace zepi\Unicode\Block;

class EgyptianHieroglyphsBlock extends AbstractBlock
{
    protected string $key = 'EgyptianHieroglyphs';
    protected array $names = [
        'en' => 'Egyptian Hieroglyphs',
        'de' => 'Ägyptische Hieroglyphen',
    ];
    protected int $blockStart = 0x13000;
    protected int $blockEnd = 0x1342F;
    protected string $regex = '/[\x{13000}-\x{1342F}]/u';
}