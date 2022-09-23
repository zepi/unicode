<?php

/**
 * The LatinExtendedBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LatinExtendedBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LatinExtendedBBlock extends AbstractBlock
{
    protected string $key = 'LatinExtendedB';
    protected array $names = [
        'en' => 'Latin Extended-B',
        'de' => 'Lateinisch, erweitert-B',
    ];
    protected int $blockStart = 0x0180;
    protected int $blockEnd = 0x024F;
    protected string $regex = '/[\x{0180}-\x{024F}]/u';
}