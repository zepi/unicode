<?php

/**
 * The TifinaghBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The TifinaghBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class TifinaghBlock extends AbstractBlock
{
    protected string $key = 'Tifinagh';
    protected array $names = [
        'en' => 'Tifinagh',
        'de' => 'Tifinagh',
    ];
    protected int $blockStart = 0x2D30;
    protected int $blockEnd = 0x2D7F;
    protected string $regex = '/[\x{2D30}-\x{2D7F}]/u';
}