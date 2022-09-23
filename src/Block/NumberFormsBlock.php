<?php

/**
 * The NumberFormsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The NumberFormsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class NumberFormsBlock extends AbstractBlock
{
    protected string $key = 'NumberForms';
    protected array $names = [
        'en' => 'Number Forms',
        'de' => 'Zahlzeichen',
    ];
    protected int $blockStart = 0x2150;
    protected int $blockEnd = 0x218F;
    protected string $regex = '/[\x{2150}-\x{218F}]/u';
}