<?php

namespace zepi\Unicode\Block;

class CJKCompatibilityFormsBlock extends AbstractBlock
{
    protected string $key = 'CJKCompatibilityForms';
    protected array $names = [
        'en' => 'CJK Compatibility Forms',
        'de' => 'CJK-Kompatibilitätsformen',
    ];
    protected int $blockStart = 0xFE30;
    protected int $blockEnd = 0xFE4F;
    protected string $regex = '/[\x{FE30}-\x{FE4F}]/u';
}