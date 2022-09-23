<?php

/**
 * The LaoBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The LaoBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class LaoBlock extends AbstractBlock
{
    protected string $key = 'Lao';
    protected array $names = [
        'en' => 'Lao',
        'de' => 'Laotisch',
    ];
    protected int $blockStart = 0x0E80;
    protected int $blockEnd = 0x0EFF;
    protected string $regex = '/[\x{0E80}-\x{0EFF}]/u';
}