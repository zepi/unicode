<?php

/**
 * The AvestanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The AvestanBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class AvestanBlock extends AbstractBlock
{
    protected string $key = 'Avestan';
    protected array $names = [
        'en' => 'Avestan',
        'de' => 'Avestisch',
    ];
    protected int $blockStart = 0x10B00;
    protected int $blockEnd = 0x10B3F;
    protected string $regex = '/[\x{10B00}-\x{10B3F}]/u';
}