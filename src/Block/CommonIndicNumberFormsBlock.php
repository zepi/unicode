<?php

/**
 * The CommonIndicNumberFormsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The CommonIndicNumberFormsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class CommonIndicNumberFormsBlock extends AbstractBlock
{
    protected string $key = 'CommonIndicNumberForms';
    protected array $names = [
        'en' => 'Common Indic Number Forms',
        'de' => 'Allgemeine indische Ziffern',
    ];
    protected int $blockStart = 0xA830;
    protected int $blockEnd = 0xA83F;
    protected string $regex = '/[\x{A830}-\x{A83F}]/u';
}