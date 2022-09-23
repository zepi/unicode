<?php

namespace zepi\Unicode\Block;

class CombiningDiacriticalMarksExtendedBlock extends AbstractBlock
{
    protected string $key = 'CombiningDiacriticalMarksExtended';
    protected array $names = [
        'en' => 'Combining Diacritical Marks Extended',
        'de' => 'Komb. diakr. Zeichen, erweitert',
    ];
    protected int $blockStart = 0x1AB0;
    protected int $blockEnd = 0x1AFF;
    protected string $regex = '/[\x{1AB0}-\x{1AFF}]/u';
}