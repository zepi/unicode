<?php

/**
 * The EnclosedAlphanumericSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The EnclosedAlphanumericSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class EnclosedAlphanumericSupplementBlock extends AbstractBlock
{
    protected string $key = 'EnclosedAlphanumericSupplement';
    protected array $names = [
        'en' => 'Enclosed Alphanumeric Supplement',
        'de' => 'Zusätzliche umschlossene alphanumerische Zeichen',
    ];
    protected int $blockStart = 0x1F100;
    protected int $blockEnd = 0x1F1FF;
    protected string $regex = '/[\x{1F100}-\x{1F1FF}]/u';
}