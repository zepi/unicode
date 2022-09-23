<?php

/**
 * The BopomofoExtendedBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BopomofoExtendedBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BopomofoExtendedBlock extends AbstractBlock
{
    protected string $key = 'BopomofoExtended';
    protected array $names = [
        'en' => 'Bopomofo Extended',
        'de' => 'Bopomofo, erweitert',
    ];
    protected int $blockStart = 0x31A0;
    protected int $blockEnd = 0x31BF;
    protected string $regex = '/[\x{31A0}-\x{31BF}]/u';
}