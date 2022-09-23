<?php

namespace zepi\Unicode\Block;

class ShorthandFormatControlsBlock extends AbstractBlock
{
    protected string $key = 'ShorthandFormatControls';
    protected array $names = [
        'en' => 'Shorthand Format Controls',
        'de' => 'Kurzschrift-Steuerzeichen',
    ];
    protected int $blockStart = 0x1BCA0;
    protected int $blockEnd = 0x1BCAF;
    protected string $regex = '/[\x{1BCA0}-\x{1BCAF}]/u';
}