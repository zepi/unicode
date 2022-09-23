<?php

/**
 * The MiaoBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The MiaoBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class MiaoBlock extends AbstractBlock
{
    protected string $key = 'Miao';
    protected array $names = [
        'en' => 'Miao',
        'de' => 'Pollard-Schrift (Miao)',
    ];
    protected int $blockStart = 0x16F00;
    protected int $blockEnd = 0x16F9F;
    protected string $regex = '/[\x{16F00}-\x{16F9F}]/u';
}