<?php

/**
 * The VerticalFormsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The VerticalFormsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class VerticalFormsBlock extends AbstractBlock
{
    protected string $key = 'VerticalForms';
    protected array $names = [
        'en' => 'Vertical Forms',
        'de' => 'Vertikale Formen',
    ];
    protected int $blockStart = 0xFE10;
    protected int $blockEnd = 0xFE1F;
    protected string $regex = '/[\x{FE10}-\x{FE1F}]/u';
}