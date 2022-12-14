<?php

/**
 * The SupplementalArrowsBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SupplementalArrowsBBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SupplementalArrowsBBlock extends AbstractBlock
{
    protected string $key = 'SupplementalArrowsB';
    protected array $names = [
        'en' => 'Supplemental Arrows-B',
        'de' => 'Zusätzliche Pfeile-B',
    ];
    protected int $blockStart = 0x2900;
    protected int $blockEnd = 0x297F;
    protected string $regex = '/[\x{2900}-\x{297F}]/u';
}