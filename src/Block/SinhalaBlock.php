<?php

/**
 * The SinhalaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The SinhalaBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class SinhalaBlock extends AbstractBlock
{
    protected string $key = 'Sinhala';
    protected array $names = [
        'en' => 'Sinhala',
        'de' => 'Singhalesisch',
    ];
    protected int $blockStart = 0x0D80;
    protected int $blockEnd = 0x0DFF;
    protected string $regex = '/[\x{0D80}-\x{0DFF}]/u';
}