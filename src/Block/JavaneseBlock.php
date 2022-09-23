<?php

namespace zepi\Unicode\Block;

class JavaneseBlock extends AbstractBlock
{
    protected string $key = 'Javanese';
    protected array $names = [
        'en' => 'Javanese',
        'de' => 'Javanisch',
    ];
    protected int $blockStart = 0xA980;
    protected int $blockEnd = 0xA9DF;
    protected string $regex = '/[\x{A980}-\x{A9DF}]/u';
}