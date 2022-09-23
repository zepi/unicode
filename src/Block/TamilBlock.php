<?php

/**
 * The TamilBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The TamilBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class TamilBlock extends AbstractBlock
{
    protected string $key = 'Tamil';
    protected array $names = [
        'en' => 'Tamil',
        'de' => 'Tamilisch',
    ];
    protected int $blockStart = 0x0B80;
    protected int $blockEnd = 0x0BFF;
    protected string $regex = '/[\x{0B80}-\x{0BFF}]/u';
}