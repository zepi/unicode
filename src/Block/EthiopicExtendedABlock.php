<?php

/**
 * The EthiopicExtendedABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The EthiopicExtendedABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class EthiopicExtendedABlock extends AbstractBlock
{
    protected string $key = 'EthiopicExtendedA';
    protected array $names = [
        'en' => 'Ethiopic Extended-A',
        'de' => 'Äthiopisch, erweitert-A',
    ];
    protected int $blockStart = 0xAB00;
    protected int $blockEnd = 0xAB2F;
    protected string $regex = '/[\x{AB00}-\x{AB2F}]/u';
}