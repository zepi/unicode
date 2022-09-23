<?php

/**
 * The GreekandCopticBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The GreekandCopticBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class GreekandCopticBlock extends AbstractBlock
{
    protected string $key = 'GreekandCoptic';
    protected array $names = [
        'en' => 'Greek and Coptic',
        'de' => 'Griechisch und Koptisch',
    ];
    protected int $blockStart = 0x0370;
    protected int $blockEnd = 0x03FF;
    protected string $regex = '/[\x{0370}-\x{03FF}]/u';
}