<?php

/**
 * The VariationSelectorsSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The VariationSelectorsSupplementBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class VariationSelectorsSupplementBlock extends AbstractBlock
{
    protected string $key = 'VariationSelectorsSupplement';
    protected array $names = [
        'en' => 'Variation Selectors Supplement',
        'de' => 'Variantenselektoren, Ergänzung',
    ];
    protected int $blockStart = 0xE0100;
    protected int $blockEnd = 0xE01EF;
    protected string $regex = '/[\x{E0100}-\x{E01EF}]/u';
}