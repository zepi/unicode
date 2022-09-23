<?php

namespace zepi\Unicode\Block;

class CJKUnifiedIdeographsExtensionBBlock extends AbstractBlock
{
    protected string $key = 'CJKUnifiedIdeographsExtensionB';
    protected array $names = [
        'en' => 'CJK Unified Ideographs Extension B',
        'de' => 'Vereinheitlichte CJK-Ideogramme, Erweiterung B',
    ];
    protected int $blockStart = 0x20000;
    protected int $blockEnd = 0x2A6DF;
    protected string $regex = '/[\x{20000}-\x{2A6DF}]/u';
}