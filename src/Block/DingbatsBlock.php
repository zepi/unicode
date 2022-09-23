<?php

namespace zepi\Unicode\Block;

class DingbatsBlock extends AbstractBlock
{
    protected string $key = 'Dingbats';
    protected array $names = [
        'en' => 'Dingbats',
        'de' => 'Dingbats',
    ];
    protected int $blockStart = 0x2700;
    protected int $blockEnd = 0x27BF;
    protected string $regex = '/[\x{2700}-\x{27BF}]/u';
}