<?php

namespace zepi\Unicode\Block;

class EnclosedCJKLettersandMonthsBlock extends AbstractBlock
{
    protected string $key = 'EnclosedCJKLettersandMonths';
    protected array $names = [
        'en' => 'Enclosed CJK Letters and Months',
        'de' => 'Umschlossene CJK-Zeichen und -Monate',
    ];
    protected int $blockStart = 0x3200;
    protected int $blockEnd = 0x32FF;
    protected string $regex = '/[\x{3200}-\x{32FF}]/u';
}