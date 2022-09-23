<?php

/**
 * The SupplementalMathematicalOperatorsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SupplementalMathematicalOperatorsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SupplementalMathematicalOperatorsBlock extends AbstractBlock
{
    protected string $key = 'SupplementalMathematicalOperators';
    protected array $names = [
        'en' => 'Supplemental Mathematical Operators',
        'de' => 'Zusätzliche Mathematische Operatoren',
    ];
    protected int $blockStart = 0x2A00;
    protected int $blockEnd = 0x2AFF;
    protected string $regex = '/[\x{2A00}-\x{2AFF}]/u';
}