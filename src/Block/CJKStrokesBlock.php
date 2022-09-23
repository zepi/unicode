<?php

namespace zepi\Unicode\Block;

class CJKStrokesBlock extends AbstractBlock
{
    protected string $key = 'CJKStrokes';
    protected array $names = [
        'en' => 'CJK Strokes',
        'de' => 'CJK-Striche',
    ];
    protected int $blockStart = 0x31C0;
    protected int $blockEnd = 0x31EF;
    protected string $regex = '/[\x{31C0}-\x{31EF}]/u';
}