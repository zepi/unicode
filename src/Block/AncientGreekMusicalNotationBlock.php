<?php

/**
 * The AncientGreekMusicalNotationBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The AncientGreekMusicalNotationBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class AncientGreekMusicalNotationBlock extends AbstractBlock
{
    protected string $key = 'AncientGreekMusicalNotation';
    protected array $names = [
        'en' => 'Ancient Greek Musical Notation',
        'de' => 'Altgriechische Notenschriftzeichen',
    ];
    protected int $blockStart = 0x1D200;
    protected int $blockEnd = 0x1D24F;
    protected string $regex = '/[\x{1D200}-\x{1D24F}]/u';
}