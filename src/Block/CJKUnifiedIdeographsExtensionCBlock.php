<?php

namespace zepi\Unicode\Block;

class CJKUnifiedIdeographsExtensionCBlock extends AbstractBlock
{
    protected string $key = 'CJKUnifiedIdeographsExtensionC';
    protected array $names = [
        'en' => 'CJK Unified Ideographs Extension C',
        'de' => 'Vereinheitlichte CJK-Ideogramme, Erweiterung C',
    ];
    protected int $blockStart = 0x2A700;
    protected int $blockEnd = 0x2B73F;
    protected string $regex = '/[\x{2A700}-\x{2B73F}]/u';
}