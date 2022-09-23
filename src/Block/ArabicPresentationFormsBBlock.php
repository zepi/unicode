<?php

namespace zepi\Unicode\Block;

class ArabicPresentationFormsBBlock extends AbstractBlock
{
    protected string $key = 'ArabicPresentationFormsB';
    protected array $names = [
        'en' => 'Arabic Presentation Forms-B',
        'de' => 'Arabische Präsentationsformen-B',
    ];
    protected int $blockStart = 0xFE70;
    protected int $blockEnd = 0xFEFF;
    protected string $regex = '/[\x{FE70}-\x{FEFF}]/u';
}