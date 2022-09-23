<?php

/**
 * The GeometricShapesExtendedBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The GeometricShapesExtendedBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
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