<?php

/**
 * The CuneiformBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CuneiformBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CuneiformBlock extends AbstractBlock
{
    protected string $key = 'Cuneiform';
    protected array $names = [
        'en' => 'Cuneiform',
        'de' => 'Keilschrift',
    ];
    protected int $blockStart = 0x12000;
    protected int $blockEnd = 0x123FF;
    protected string $regex = '/[\x{12000}-\x{123FF}]/u';
}