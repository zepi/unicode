<?php

namespace zepi\Unicode\Block;

class SuperscriptsandSubscriptsBlock extends AbstractBlock
{
    protected string $key = 'SuperscriptsandSubscripts';
    protected array $names = [
        'en' => 'Superscripts and Subscripts',
        'de' => 'Hoch- und tiefgestellte Zeichen',
    ];
    protected int $blockStart = 0x2070;
    protected int $blockEnd = 0x209F;
    protected string $regex = '/[\x{2070}-\x{209F}]/u';
}