<?php

/**
 * The LatinExtendedDBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LatinExtendedDBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LatinExtendedDBlock extends AbstractBlock
{
    protected string $key = 'LatinExtendedD';
    protected array $names = [
        'en' => 'Latin Extended-D',
        'de' => 'Lateinisch, erweitert-D',
    ];
    protected int $blockStart = 0xA720;
    protected int $blockEnd = 0xA7FF;
    protected string $regex = '/[\x{A720}-\x{A7FF}]/u';
}