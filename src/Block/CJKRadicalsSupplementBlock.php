<?php

namespace zepi\Unicode\Block;

class CJKRadicalsSupplementBlock extends AbstractBlock
{
    protected string $key = 'CJKRadicalsSupplement';
    protected array $names = [
        'en' => 'CJK Radicals Supplement',
        'de' => 'CJK-Radikale, Ergänzung',
    ];
    protected int $blockStart = 0x2E80;
    protected int $blockEnd = 0x2EFF;
    protected string $regex = '/[\x{2E80}-\x{2EFF}]/u';
}