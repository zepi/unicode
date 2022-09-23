<?php

/**
 * The ArabicSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ArabicSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ArabicSupplementBlock extends AbstractBlock
{
    protected string $key = 'ArabicSupplement';
    protected array $names = [
        'en' => 'Arabic Supplement',
        'de' => 'Arabisch, Ergänzung',
    ];
    protected int $blockStart = 0x0750;
    protected int $blockEnd = 0x077F;
    protected string $regex = '/[\x{0750}-\x{077F}]/u';
}