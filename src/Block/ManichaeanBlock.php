<?php

/**
 * The ManichaeanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ManichaeanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ManichaeanBlock extends AbstractBlock
{
    protected string $key = 'Manichaean';
    protected array $names = [
        'en' => 'Manichaean',
        'de' => 'Manichäisch',
    ];
    protected int $blockStart = 0x10AC0;
    protected int $blockEnd = 0x10AFF;
    protected string $regex = '/[\x{10AC0}-\x{10AFF}]/u';
}