<?php

namespace zepi\Unicode\Block;

class CJKCompatibilityIdeographsSupplementBlock extends AbstractBlock
{
    protected string $key = 'CJKCompatibilityIdeographsSupplement';
    protected array $names = [
        'en' => 'CJK Compatibility Ideographs Supplement',
        'de' => 'CJK-Ideogramme, Kompatibilität, Ergänzung',
    ];
    protected int $blockStart = 0x2F800;
    protected int $blockEnd = 0x2FA1F;
    protected string $regex = '/[\x{2F800}-\x{2FA1F}]/u';
}