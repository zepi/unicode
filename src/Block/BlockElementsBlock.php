<?php

namespace zepi\Unicode\Block;

class BlockElementsBlock extends AbstractBlock
{
    protected string $key = 'BlockElements';
    protected array $names = [
        'en' => 'Block Elements',
        'de' => 'Blockelemente',
    ];
    protected int $blockStart = 0x2580;
    protected int $blockEnd = 0x259F;
    protected string $regex = '/[\x{2580}-\x{259F}]/u';
}