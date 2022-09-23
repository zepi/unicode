<?php

/**
 * The CJKRadicalsSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CJKRadicalsSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CJKRadicalsSupplementBlock extends AbstractBlock
{
    protected string $key = 'CJKRadicalsSupplement';
    protected array $names = [
        'en' => 'CJK Radicals Supplement',
        'de' => 'CJK-Radikale, Ergänzung',
    ];
    protected int $blockStart = 0x2E80;
    protected int $blockEnd = 0x2EFF;
    protected string $regex = '/[\x{2E80}-\x{2EFF}]/u';
}