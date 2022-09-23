<?php

/**
 * The CypriotSyllabaryBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CypriotSyllabaryBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CypriotSyllabaryBlock extends AbstractBlock
{
    protected string $key = 'CypriotSyllabary';
    protected array $names = [
        'en' => 'Cypriot Syllabary',
        'de' => 'Kyprische Schrift',
    ];
    protected int $blockStart = 0x10800;
    protected int $blockEnd = 0x1083F;
    protected string $regex = '/[\x{10800}-\x{1083F}]/u';
}