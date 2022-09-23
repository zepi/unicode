<?php

/**
 * The JavaneseBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The JavaneseBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class JavaneseBlock extends AbstractBlock
{
    protected string $key = 'Javanese';
    protected array $names = [
        'en' => 'Javanese',
        'de' => 'Javanisch',
    ];
    protected int $blockStart = 0xA980;
    protected int $blockEnd = 0xA9DF;
    protected string $regex = '/[\x{A980}-\x{A9DF}]/u';
}