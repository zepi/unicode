<?php

/**
 * The ModiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ModiBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ModiBlock extends AbstractBlock
{
    protected string $key = 'Modi';
    protected array $names = [
        'en' => 'Modi',
        'de' => 'Modi',
    ];
    protected int $blockStart = 0x11600;
    protected int $blockEnd = 0x1165F;
    protected string $regex = '/[\x{11600}-\x{1165F}]/u';
}