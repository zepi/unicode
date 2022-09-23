<?php

/**
 * The LatinExtendedAdditionalBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LatinExtendedAdditionalBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LatinExtendedAdditionalBlock extends AbstractBlock
{
    protected string $key = 'LatinExtendedAdditional';
    protected array $names = [
        'en' => 'Latin Extended Additional',
        'de' => 'Lateinisch, weiterer Zusatz',
    ];
    protected int $blockStart = 0x1E00;
    protected int $blockEnd = 0x1EFF;
    protected string $regex = '/[\x{1E00}-\x{1EFF}]/u';
}