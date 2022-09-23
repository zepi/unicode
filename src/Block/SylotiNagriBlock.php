<?php

/**
 * The SylotiNagriBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SylotiNagriBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SylotiNagriBlock extends AbstractBlock
{
    protected string $key = 'SylotiNagri';
    protected array $names = [
        'en' => 'Syloti Nagri',
        'de' => 'Syloti Nagri',
    ];
    protected int $blockStart = 0xA800;
    protected int $blockEnd = 0xA82F;
    protected string $regex = '/[\x{A800}-\x{A82F}]/u';
}