<?php

namespace zepi\Unicode\Block;

class LowSurrogatesBlock extends AbstractBlock
{
    protected string $key = 'LowSurrogates';
    protected array $names = [
        'en' => 'Low Surrogates',
        'de' => 'Low Surrogates',
    ];
    protected int $blockStart = 0xDC00;
    protected int $blockEnd = 0xDFFF;
    protected string $regex = '/[\x{DC00}-\x{DFFF}]/u';
}