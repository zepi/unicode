<?php

namespace zepi\Unicode\Block;

class SmallFormVariantsBlock extends AbstractBlock
{
    protected string $key = 'SmallFormVariants';
    protected array $names = [
        'en' => 'Small Form Variants',
        'de' => 'Kleine Formvarianten',
    ];
    protected int $blockStart = 0xFE50;
    protected int $blockEnd = 0xFE6F;
    protected string $regex = '/[\x{FE50}-\x{FE6F}]/u';
}