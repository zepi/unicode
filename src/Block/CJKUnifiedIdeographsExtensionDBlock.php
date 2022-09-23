<?php

namespace zepi\Unicode\Block;

class CJKUnifiedIdeographsExtensionDBlock extends AbstractBlock
{
    protected string $key = 'CJKUnifiedIdeographsExtensionD';
    protected array $names = [
        'en' => 'CJK Unified Ideographs Extension D',
        'de' => 'Vereinheitlichte CJK-Ideogramme, Erweiterung D',
    ];
    protected int $blockStart = 0x2B740;
    protected int $blockEnd = 0x2B81F;
    protected string $regex = '/[\x{2B740}-\x{2B81F}]/u';
}