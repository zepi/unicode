<?php

namespace zepi\Unicode\Block;

class LisuBlock extends AbstractBlock
{
    protected string $key = 'Lisu';
    protected array $names = [
        'en' => 'Lisu',
        'de' => 'Lisu',
    ];
    protected int $blockStart = 0xA4D0;
    protected int $blockEnd = 0xA4FF;
    protected string $regex = '/[\x{A4D0}-\x{A4FF}]/u';
}