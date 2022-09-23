<?php

/**
 * The OldNorthArabianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The OldNorthArabianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class OldNorthArabianBlock extends AbstractBlock
{
    protected string $key = 'OldNorthArabian';
    protected array $names = [
        'en' => 'Old North Arabian',
        'de' => 'Altnordarabisch',
    ];
    protected int $blockStart = 0x10A80;
    protected int $blockEnd = 0x10A9F;
    protected string $regex = '/[\x{10A80}-\x{10A9F}]/u';
}