<?php

/**
 * The SupplementalArrowsCBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SupplementalArrowsCBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SupplementalArrowsCBlock extends AbstractBlock
{
    protected string $key = 'SupplementalArrowsC';
    protected array $names = [
        'en' => 'Supplemental Arrows-C',
        'de' => 'Zusätzliche Pfeile-C',
    ];
    protected int $blockStart = 0x1F800;
    protected int $blockEnd = 0x1F8FF;
    protected string $regex = '/[\x{1F800}-\x{1F8FF}]/u';
}