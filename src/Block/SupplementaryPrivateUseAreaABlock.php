<?php

/**
 * The SupplementaryPrivateUseAreaABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SupplementaryPrivateUseAreaABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SupplementaryPrivateUseAreaABlock extends AbstractBlock
{
    protected string $key = 'SupplementaryPrivateUseAreaA';
    protected array $names = [
        'en' => 'Supplementary Private Use Area-A',
        'de' => 'Supplementary Private Use Area-A',
    ];
    protected int $blockStart = 0xF0000;
    protected int $blockEnd = 0xFFFFF;
    protected string $regex = '/[\x{F0000}-\x{FFFFF}]/u';
}