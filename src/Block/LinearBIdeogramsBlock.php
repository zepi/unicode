<?php

namespace zepi\Unicode\Block;

class LinearBIdeogramsBlock extends AbstractBlock
{
    protected string $key = 'LinearBIdeograms';
    protected array $names = [
        'en' => 'Linear B Ideograms',
        'de' => 'Linear-B-Ideogramme',
    ];
    protected int $blockStart = 0x10080;
    protected int $blockEnd = 0x100FF;
    protected string $regex = '/[\x{10080}-\x{100FF}]/u';
}