<?php

namespace zepi\Unicode\Block;

class KhojkiBlock extends AbstractBlock
{
    protected string $key = 'Khojki';
    protected array $names = [
        'en' => 'Khojki',
        'de' => 'Khojki',
    ];
    protected int $blockStart = 0x11200;
    protected int $blockEnd = 0x1124F;
    protected string $regex = '/[\x{11200}-\x{1124F}]/u';
}