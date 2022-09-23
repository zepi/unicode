<?php

namespace zepi\Unicode\Block;

class EarlyDynasticCuneiformBlock extends AbstractBlock
{
    protected string $key = 'EarlyDynasticCuneiform';
    protected array $names = [
        'en' => 'Early Dynastic Cuneiform',
        'de' => 'Frühe Keilschrift',
    ];
    protected int $blockStart = 0x12480;
    protected int $blockEnd = 0x1254F;
    protected string $regex = '/[\x{12480}-\x{1254F}]/u';
}