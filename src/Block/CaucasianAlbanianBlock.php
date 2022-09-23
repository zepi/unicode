<?php

namespace zepi\Unicode\Block;

class CaucasianAlbanianBlock extends AbstractBlock
{
    protected string $key = 'CaucasianAlbanian';
    protected array $names = [
        'en' => 'Caucasian Albanian',
        'de' => 'Alwanisch',
    ];
    protected int $blockStart = 0x10530;
    protected int $blockEnd = 0x1056F;
    protected string $regex = '/[\x{10530}-\x{1056F}]/u';
}