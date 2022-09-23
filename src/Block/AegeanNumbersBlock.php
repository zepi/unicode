<?php

/**
 * The AegeanNumbersBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The AegeanNumbersBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class AegeanNumbersBlock extends AbstractBlock
{
    protected string $key = 'AegeanNumbers';
    protected array $names = [
        'en' => 'Aegean Numbers',
        'de' => 'Ägäische Zahlzeichen',
    ];
    protected int $blockStart = 0x10100;
    protected int $blockEnd = 0x1013F;
    protected string $regex = '/[\x{10100}-\x{1013F}]/u';
}