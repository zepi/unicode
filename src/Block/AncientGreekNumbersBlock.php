<?php

/**
 * The AncientGreekNumbersBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The AncientGreekNumbersBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class AncientGreekNumbersBlock extends AbstractBlock
{
    protected string $key = 'AncientGreekNumbers';
    protected array $names = [
        'en' => 'Ancient Greek Numbers',
        'de' => 'Altgriechische Zahlzeichen',
    ];
    protected int $blockStart = 0x10140;
    protected int $blockEnd = 0x1018F;
    protected string $regex = '/[\x{10140}-\x{1018F}]/u';
}