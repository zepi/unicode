<?php

/**
 * The MendeKikakuiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MendeKikakuiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MendeKikakuiBlock extends AbstractBlock
{
    protected string $key = 'MendeKikakui';
    protected array $names = [
        'en' => 'Mende Kikakui',
        'de' => 'Mende-Schrift',
    ];
    protected int $blockStart = 0x1E800;
    protected int $blockEnd = 0x1E8DF;
    protected string $regex = '/[\x{1E800}-\x{1E8DF}]/u';
}