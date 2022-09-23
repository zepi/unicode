<?php

/**
 * The GeneralPunctuationBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The GeneralPunctuationBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class GeneralPunctuationBlock extends AbstractBlock
{
    protected string $key = 'GeneralPunctuation';
    protected array $names = [
        'en' => 'General Punctuation',
        'de' => 'Allgemeine Interpunktion',
    ];
    protected int $blockStart = 0x2000;
    protected int $blockEnd = 0x206F;
    protected string $regex = '/[\x{2000}-\x{206F}]/u';
}