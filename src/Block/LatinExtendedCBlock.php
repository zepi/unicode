<?php

/**
 * The LatinExtendedCBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LatinExtendedCBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LatinExtendedCBlock extends AbstractBlock
{
    protected string $key = 'LatinExtendedC';
    protected array $names = [
        'en' => 'Latin Extended-C',
        'de' => 'Lateinisch, erweitert-C',
    ];
    protected int $blockStart = 0x2C60;
    protected int $blockEnd = 0x2C7F;
    protected string $regex = '/[\x{2C60}-\x{2C7F}]/u';
}