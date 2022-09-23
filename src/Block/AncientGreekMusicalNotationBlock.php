<?php

namespace zepi\Unicode\Block;

class AncientGreekMusicalNotationBlock extends AbstractBlock
{
    protected string $key = 'AncientGreekMusicalNotation';
    protected array $names = [
        'en' => 'Ancient Greek Musical Notation',
        'de' => 'Altgriechische Notenschriftzeichen',
    ];
    protected int $blockStart = 0x1D200;
    protected int $blockEnd = 0x1D24F;
    protected string $regex = '/[\x{1D200}-\x{1D24F}]/u';
}