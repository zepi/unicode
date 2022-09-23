<?php

namespace zepi\Unicode\Block;

class GreekExtendedBlock extends AbstractBlock
{
    protected string $key = 'GreekExtended';
    protected array $names = [
        'en' => 'Greek Extended',
        'de' => 'Griechisch, Zusatz',
    ];
    protected int $blockStart = 0x1F00;
    protected int $blockEnd = 0x1FFF;
    protected string $regex = '/[\x{1F00}-\x{1FFF}]/u';
}