<?php

namespace zepi\Unicode\Block;

class VariationSelectorsBlock extends AbstractBlock
{
    protected string $key = 'VariationSelectors';
    protected array $names = [
        'en' => 'Variation Selectors',
        'de' => 'Variantenselektoren',
    ];
    protected int $blockStart = 0xFE00;
    protected int $blockEnd = 0xFE0F;
    protected string $regex = '/[\x{FE00}-\x{FE0F}]/u';
}