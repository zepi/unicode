<?php

/**
 * The NewTaiLueBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The NewTaiLueBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class NewTaiLueBlock extends AbstractBlock
{
    protected string $key = 'NewTaiLue';
    protected array $names = [
        'en' => 'New Tai Lue',
        'de' => 'Neu-Tai-Lue',
    ];
    protected int $blockStart = 0x1980;
    protected int $blockEnd = 0x19DF;
    protected string $regex = '/[\x{1980}-\x{19DF}]/u';
}