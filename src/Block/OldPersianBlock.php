<?php

/**
 * The OldPersianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The OldPersianBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class OldPersianBlock extends AbstractBlock
{
    protected string $key = 'OldPersian';
    protected array $names = [
        'en' => 'Old Persian',
        'de' => 'Altpersisch',
    ];
    protected int $blockStart = 0x103A0;
    protected int $blockEnd = 0x103DF;
    protected string $regex = '/[\x{103A0}-\x{103DF}]/u';
}