<?php

/**
 * The BatakBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The BatakBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class BatakBlock extends AbstractBlock
{
    protected string $key = 'Batak';
    protected array $names = [
        'en' => 'Batak',
        'de' => 'Batak',
    ];
    protected int $blockStart = 0x1BC0;
    protected int $blockEnd = 0x1BFF;
    protected string $regex = '/[\x{1BC0}-\x{1BFF}]/u';
}