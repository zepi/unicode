<?php

/**
 * The LatinExtendedABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LatinExtendedABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LatinExtendedABlock extends AbstractBlock
{
    protected string $key = 'LatinExtendedA';
    protected array $names = [
        'en' => 'Latin Extended-A',
        'de' => 'Lateinisch, erweitert-A',
    ];
    protected int $blockStart = 0x0100;
    protected int $blockEnd = 0x017F;
    protected string $regex = '/[\x{0100}-\x{017F}]/u';
}