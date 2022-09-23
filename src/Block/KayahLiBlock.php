<?php

/**
 * The KayahLiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The KayahLiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class KayahLiBlock extends AbstractBlock
{
    protected string $key = 'KayahLi';
    protected array $names = [
        'en' => 'Kayah Li',
        'de' => 'Kayah Li',
    ];
    protected int $blockStart = 0xA900;
    protected int $blockEnd = 0xA92F;
    protected string $regex = '/[\x{A900}-\x{A92F}]/u';
}