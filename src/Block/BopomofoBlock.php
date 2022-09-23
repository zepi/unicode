<?php

/**
 * The BopomofoBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BopomofoBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BopomofoBlock extends AbstractBlock
{
    protected string $key = 'Bopomofo';
    protected array $names = [
        'en' => 'Bopomofo',
        'de' => 'Bopomofo',
    ];
    protected int $blockStart = 0x3100;
    protected int $blockEnd = 0x312F;
    protected string $regex = '/[\x{3100}-\x{312F}]/u';
}