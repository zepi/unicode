<?php

/**
 * The SuttonSignWritingBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SuttonSignWritingBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SuttonSignWritingBlock extends AbstractBlock
{
    protected string $key = 'SuttonSignWriting';
    protected array $names = [
        'en' => 'Sutton SignWriting',
        'de' => 'Sutton-SignWriting',
    ];
    protected int $blockStart = 0x1D800;
    protected int $blockEnd = 0x1DAAF;
    protected string $regex = '/[\x{1D800}-\x{1DAAF}]/u';
}