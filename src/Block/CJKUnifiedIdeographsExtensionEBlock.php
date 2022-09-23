<?php

namespace zepi\Unicode\Block;

class CJKUnifiedIdeographsExtensionEBlock extends AbstractBlock
{
    protected string $key = 'CJKUnifiedIdeographsExtensionE';
    protected array $names = [
        'en' => 'CJK Unified Ideographs Extension E',
        'de' => 'Vereinheitlichte CJK-Ideogramme, Erweiterung E',
    ];
    protected int $blockStart = 0x2B820;
    protected int $blockEnd = 0x2CEAF;
    protected string $regex = '/[\x{2B820}-\x{2CEAF}]/u';
}