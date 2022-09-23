<?php

namespace zepi\Unicode\Block;

class CJKUnifiedIdeographsExtensionABlock extends AbstractBlock
{
    protected string $key = 'CJKUnifiedIdeographsExtensionA';
    protected array $names = [
        'en' => 'CJK Unified Ideographs Extension A',
        'de' => 'Vereinheitlichte CJK-Ideogramme, Erweiterung A',
    ];
    protected int $blockStart = 0x3400;
    protected int $blockEnd = 0x4DBF;
    protected string $regex = '/[\x{3400}-\x{4DBF}]/u';
}