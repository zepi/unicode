<?php

namespace zepi\Unicode\Block;

class GeometricShapesExtendedBlock extends AbstractBlock
{
    protected string $key = 'GeometricShapesExtended';
    protected array $names = [
        'en' => 'Geometric Shapes Extended',
        'de' => 'Geometrische Formen, erweitert',
    ];
    protected int $blockStart = 0x1F780;
    protected int $blockEnd = 0x1F7FF;
    protected string $regex = '/[\x{1F780}-\x{1F7FF}]/u';
}