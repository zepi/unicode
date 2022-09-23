<?php

/**
 * The PhagspaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The PhagspaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class PhagspaBlock extends AbstractBlock
{
    protected string $key = 'Phagspa';
    protected array $names = [
        'en' => 'Phags-pa',
        'de' => 'Phagspa',
    ];
    protected int $blockStart = 0xA840;
    protected int $blockEnd = 0xA87F;
    protected string $regex = '/[\x{A840}-\x{A87F}]/u';
}