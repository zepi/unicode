<?php

/**
 * The VariationSelectorsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode\Block;

/**
 * The VariationSelectorsBlock class
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class VariationSelectorsBlock extends AbstractBlock
{
    protected string $key = 'VariationSelectors';
    protected array $names = [
        'en' => 'Variation Selectors',
        'de' => 'Variantenselektoren',
    ];
    protected int $blockStart = 0xFE00;
    protected int $blockEnd = 0xFE0F;
    protected string $regex = '/[\x{FE00}-\x{FE0F}]/u';
}