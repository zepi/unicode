<?php

namespace zepi\Unicode\Block;

class CJKUnifiedIdeographsBlock extends AbstractBlock
{
    protected string $key = 'CJKUnifiedIdeographs';
    protected array $names = [
        'en' => 'CJK Unified Ideographs',
        'de' => 'Vereinheitlichte CJK-Ideogramme',
    ];
    protected int $blockStart = 0x4E00;
    protected int $blockEnd = 0x9FFF;
    protected string $regex = '/[\x{4E00}-\x{9FFF}]/u';
}