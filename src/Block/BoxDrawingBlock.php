<?php

/**
 * The BoxDrawingBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BoxDrawingBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BoxDrawingBlock extends AbstractBlock
{
    protected string $key = 'BoxDrawing';
    protected array $names = [
        'en' => 'Box Drawing',
        'de' => 'Rahmenzeichnung',
    ];
    protected int $blockStart = 0x2500;
    protected int $blockEnd = 0x257F;
    protected string $regex = '/[\x{2500}-\x{257F}]/u';
}