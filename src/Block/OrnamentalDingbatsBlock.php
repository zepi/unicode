<?php

namespace zepi\Unicode\Block;

class OrnamentalDingbatsBlock extends AbstractBlock
{
    protected string $key = 'OrnamentalDingbats';
    protected array $names = [
        'en' => 'Ornamental Dingbats',
        'de' => 'Ziersymbole',
    ];
    protected int $blockStart = 0x1F650;
    protected int $blockEnd = 0x1F67F;
    protected string $regex = '/[\x{1F650}-\x{1F67F}]/u';
}