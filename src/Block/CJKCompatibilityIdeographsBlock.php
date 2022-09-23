<?php

namespace zepi\Unicode\Block;

class CJKCompatibilityIdeographsBlock extends AbstractBlock
{
    protected string $key = 'CJKCompatibilityIdeographs';
    protected array $names = [
        'en' => 'CJK Compatibility Ideographs',
        'de' => 'CJK-Ideogramme, Kompatibilität',
    ];
    protected int $blockStart = 0xF900;
    protected int $blockEnd = 0xFAFF;
    protected string $regex = '/[\x{F900}-\x{FAFF}]/u';
}