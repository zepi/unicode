<?php

namespace zepi\Unicode\Block;

class IPAExtensionsBlock extends AbstractBlock
{
    protected string $key = 'IPAExtensions';
    protected array $names = [
        'en' => 'IPA Extensions',
        'de' => 'IPA-Erweiterungen',
    ];
    protected int $blockStart = 0x0250;
    protected int $blockEnd = 0x02AF;
    protected string $regex = '/[\x{0250}-\x{02AF}]/u';
}