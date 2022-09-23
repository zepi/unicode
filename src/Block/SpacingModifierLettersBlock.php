<?php

namespace zepi\Unicode\Block;

class SpacingModifierLettersBlock extends AbstractBlock
{
    protected string $key = 'SpacingModifierLetters';
    protected array $names = [
        'en' => 'Spacing Modifier Letters',
        'de' => 'Spacing Modifier Letters',
    ];
    protected int $blockStart = 0x02B0;
    protected int $blockEnd = 0x02FF;
    protected string $regex = '/[\x{02B0}-\x{02FF}]/u';
}