<?php

namespace zepi\Unicode\Block;

class RejangBlock extends AbstractBlock
{
    protected string $key = 'Rejang';
    protected array $names = [
        'en' => 'Rejang',
        'de' => 'Rejang',
    ];
    protected int $blockStart = 0xA930;
    protected int $blockEnd = 0xA95F;
    protected string $regex = '/[\x{A930}-\x{A95F}]/u';
}