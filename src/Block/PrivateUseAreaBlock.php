<?php

/**
 * The PrivateUseAreaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The PrivateUseAreaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class PrivateUseAreaBlock extends AbstractBlock
{
    protected string $key = 'PrivateUseArea';
    protected array $names = [
        'en' => 'Private Use Area',
        'de' => 'Private Use Zone',
    ];
    protected int $blockStart = 0xE000;
    protected int $blockEnd = 0xF8FF;
    protected string $regex = '/[\x{E000}-\x{F8FF}]/u';
}