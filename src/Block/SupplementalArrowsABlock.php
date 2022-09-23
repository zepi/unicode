<?php

/**
 * The SupplementalArrowsABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SupplementalArrowsABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SupplementalArrowsABlock extends AbstractBlock
{
    protected string $key = 'SupplementalArrowsA';
    protected array $names = [
        'en' => 'Supplemental Arrows-A',
        'de' => 'Zusätzliche Pfeile-A',
    ];
    protected int $blockStart = 0x27F0;
    protected int $blockEnd = 0x27FF;
    protected string $regex = '/[\x{27F0}-\x{27FF}]/u';
}