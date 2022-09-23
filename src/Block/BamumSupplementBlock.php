<?php

/**
 * The BamumSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BamumSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BamumSupplementBlock extends AbstractBlock
{
    protected string $key = 'BamumSupplement';
    protected array $names = [
        'en' => 'Bamum Supplement',
        'de' => 'Bamum, Ergänzung',
    ];
    protected int $blockStart = 0x16800;
    protected int $blockEnd = 0x16A3F;
    protected string $regex = '/[\x{16800}-\x{16A3F}]/u';
}