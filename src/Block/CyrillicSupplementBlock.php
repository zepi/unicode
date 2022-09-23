<?php

/**
 * The CyrillicSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CyrillicSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CyrillicSupplementBlock extends AbstractBlock
{
    protected string $key = 'CyrillicSupplement';
    protected array $names = [
        'en' => 'Cyrillic Supplement',
        'de' => 'Kyrillisch, Ergänzung',
    ];
    protected int $blockStart = 0x0500;
    protected int $blockEnd = 0x052F;
    protected string $regex = '/[\x{0500}-\x{052F}]/u';
}