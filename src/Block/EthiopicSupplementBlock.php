<?php

/**
 * The EthiopicSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The EthiopicSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class EthiopicSupplementBlock extends AbstractBlock
{
    protected string $key = 'EthiopicSupplement';
    protected array $names = [
        'en' => 'Ethiopic Supplement',
        'de' => 'Äthiopisch, Zusatz',
    ];
    protected int $blockStart = 0x1380;
    protected int $blockEnd = 0x139F;
    protected string $regex = '/[\x{1380}-\x{139F}]/u';
}