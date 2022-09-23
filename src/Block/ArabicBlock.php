<?php

/**
 * The ArabicBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ArabicBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ArabicBlock extends AbstractBlock
{
    protected string $key = 'Arabic';
    protected array $names = [
        'en' => 'Arabic',
        'de' => 'Arabisch',
    ];
    protected int $blockStart = 0x0600;
    protected int $blockEnd = 0x06FF;
    protected string $regex = '/[\x{0600}-\x{06FF}]/u';
}