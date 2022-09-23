<?php

/**
 * The ArabicPresentationFormsABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The ArabicPresentationFormsABlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class ArabicPresentationFormsABlock extends AbstractBlock
{
    protected string $key = 'ArabicPresentationFormsA';
    protected array $names = [
        'en' => 'Arabic Presentation Forms-A',
        'de' => 'Arabische Präsentationsformen-A',
    ];
    protected int $blockStart = 0xFB50;
    protected int $blockEnd = 0xFDFF;
    protected string $regex = '/[\x{FB50}-\x{FDFF}]/u';
}