<?php

namespace zepi\Unicode\Block;

class MeeteiMayekBlock extends AbstractBlock
{
    protected string $key = 'MeeteiMayek';
    protected array $names = [
        'en' => 'Meetei Mayek',
        'de' => 'Meitei-Mayek',
    ];
    protected int $blockStart = 0xABC0;
    protected int $blockEnd = 0xABFF;
    protected string $regex = '/[\x{ABC0}-\x{ABFF}]/u';
}