<?php

namespace zepi\Unicode\Block;

class GeometricShapesBlock extends AbstractBlock
{
    protected string $key = 'GeometricShapes';
    protected array $names = [
        'en' => 'Geometric Shapes',
        'de' => 'Geometrische Formen',
    ];
    protected int $blockStart = 0x25A0;
    protected int $blockEnd = 0x25FF;
    protected string $regex = '/[\x{25A0}-\x{25FF}]/u';
}