<?php

/**
 * The LinearBSyllabaryBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LinearBSyllabaryBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LinearBSyllabaryBlock extends AbstractBlock
{
    protected string $key = 'LinearBSyllabary';
    protected array $names = [
        'en' => 'Linear B Syllabary',
        'de' => 'Linear-B-Silbenzeichen',
    ];
    protected int $blockStart = 0x10000;
    protected int $blockEnd = 0x1007F;
    protected string $regex = '/[\x{10000}-\x{1007F}]/u';
}