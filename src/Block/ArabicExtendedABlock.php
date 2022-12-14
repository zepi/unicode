<?php

/**
 * The ArabicExtendedABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ArabicExtendedABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ArabicExtendedABlock extends AbstractBlock
{
    protected string $key = 'ArabicExtendedA';
    protected array $names = [
        'en' => 'Arabic Extended-A',
        'de' => 'Arabisch, erweitert-A',
    ];
    protected int $blockStart = 0x08A0;
    protected int $blockEnd = 0x08FF;
    protected string $regex = '/[\x{08A0}-\x{08FF}]/u';
}