<?php

/**
 * The DuployanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The DuployanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class DuployanBlock extends AbstractBlock
{
    protected string $key = 'Duployan';
    protected array $names = [
        'en' => 'Duployan',
        'de' => 'Duployé-Kurzschrift',
    ];
    protected int $blockStart = 0x1BC00;
    protected int $blockEnd = 0x1BC9F;
    protected string $regex = '/[\x{1BC00}-\x{1BC9F}]/u';
}