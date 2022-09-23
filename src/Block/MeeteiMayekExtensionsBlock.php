<?php

namespace zepi\Unicode\Block;

class MeeteiMayekExtensionsBlock extends AbstractBlock
{
    protected string $key = 'MeeteiMayekExtensions';
    protected array $names = [
        'en' => 'Meetei Mayek Extensions',
        'de' => 'Meitei-Mayek, Erweiterungen',
    ];
    protected int $blockStart = 0xAAE0;
    protected int $blockEnd = 0xAAFF;
    protected string $regex = '/[\x{AAE0}-\x{AAFF}]/u';
}