<?php

/**
 * The TakriBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The TakriBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class TakriBlock extends AbstractBlock
{
    protected string $key = 'Takri';
    protected array $names = [
        'en' => 'Takri',
        'de' => 'Takri',
    ];
    protected int $blockStart = 0x11680;
    protected int $blockEnd = 0x116CF;
    protected string $regex = '/[\x{11680}-\x{116CF}]/u';
}