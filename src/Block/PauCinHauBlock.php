<?php

/**
 * The PauCinHauBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The PauCinHauBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class PauCinHauBlock extends AbstractBlock
{
    protected string $key = 'PauCinHau';
    protected array $names = [
        'en' => 'Pau Cin Hau',
        'de' => 'Pau Cin Hau',
    ];
    protected int $blockStart = 0x11AC0;
    protected int $blockEnd = 0x11AFF;
    protected string $regex = '/[\x{11AC0}-\x{11AFF}]/u';
}