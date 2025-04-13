<?php

/**
 * The InvisibleCharacterIndex to help with the invisible characters
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2025 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode;

/**
 * The InvisibleCharacterIndex to help with the invisible characters
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class InvisibleCodepointIndex
{
    // Source: https://util.unicode.org/UnicodeJsps/list-unicodeset.jsp?a=%5B%3Adi%3A%5D%5B%3Awhite_space%3A%5D-%5B%3ACn%3A%5D&g=&i=
    const codepoints = [
        '00A0' => ['group' => 'Latin1Supplement', 'name' => 'NO-BREAK SPACE'],
        '00AD' => ['group' => 'Latin1Supplement', 'name' => 'SOFT HYPHEN'],
        '034F' => ['group' => 'CombiningDiacriticalMarks', 'name' => 'COMBINING GRAPHEME JOINER'],
        '061C' => ['group' => 'Arabic', 'name' => 'ARABIC LETTER MARK'],
        '17B4' => ['group' => 'Khmer', 'name' => 'KHMER VOWEL INHERENT AQ'],
        '17B5' => ['group' => 'Khmer', 'name' => 'KHMER VOWEL INHERENT AA'],
        '180B' => ['group' => 'Mongolian', 'name' => 'MONGOLIAN FREE VARIATION SELECTOR ONE'],
        '180C' => ['group' => 'Mongolian', 'name' => 'MONGOLIAN FREE VARIATION SELECTOR TWO'],
        '180D' => ['group' => 'Mongolian', 'name' => 'MONGOLIAN FREE VARIATION SELECTOR THREE'],
        '180E' => ['group' => 'Mongolian', 'name' => 'MONGOLIAN VOWEL SEPARATOR'],
        '180F' => ['group' => 'Mongolian', 'name' => 'MONGOLIAN FREE VARIATION SELECTOR FOUR'],
        '200B' => ['group' => 'GeneralPunctuation', 'name' => 'ZERO WIDTH SPACE'],
        '200C' => ['group' => 'GeneralPunctuation', 'name' => 'ZERO WIDTH NON-JOINER'],
        '200D' => ['group' => 'GeneralPunctuation', 'name' => 'ZERO WIDTH JOINER'],
        '200E' => ['group' => 'GeneralPunctuation', 'name' => 'LEFT-TO-RIGHT MARK'],
        '200F' => ['group' => 'GeneralPunctuation', 'name' => 'RIGHT-TO-LEFT MARK'],
        '202A' => ['group' => 'GeneralPunctuation', 'name' => 'LEFT-TO-RIGHT EMBEDDING'],
        '202B' => ['group' => 'GeneralPunctuation', 'name' => 'RIGHT-TO-LEFT EMBEDDING'],
        '202C' => ['group' => 'GeneralPunctuation', 'name' => 'POP DIRECTIONAL FORMATTING'],
        '202D' => ['group' => 'GeneralPunctuation', 'name' => 'LEFT-TO-RIGHT OVERRIDE'],
        '202E' => ['group' => 'GeneralPunctuation', 'name' => 'RIGHT-TO-LEFT OVERRIDE'],
        '2060' => ['group' => 'GeneralPunctuation', 'name' => 'WORD JOINER'],
        '2061' => ['group' => 'GeneralPunctuation', 'name' => 'FUNCTION APPLICATION'],
        '2062' => ['group' => 'GeneralPunctuation', 'name' => 'INVISIBLE TIMES'],
        '2063' => ['group' => 'GeneralPunctuation', 'name' => 'INVISIBLE SEPARATOR'],
        '2064' => ['group' => 'GeneralPunctuation', 'name' => 'INVISIBLE PLUS'],
        '2066' => ['group' => 'GeneralPunctuation', 'name' => 'LEFT-TO-RIGHT ISOLATE'],
        '2067' => ['group' => 'GeneralPunctuation', 'name' => 'RIGHT-TO-LEFT ISOLATE'],
        '2068' => ['group' => 'GeneralPunctuation', 'name' => 'FIRST STRONG ISOLATE'],
        '2069' => ['group' => 'GeneralPunctuation', 'name' => 'POP DIRECTIONAL ISOLATE'],
        '206A' => ['group' => 'GeneralPunctuation', 'name' => 'INHIBIT SYMMETRIC SWAPPING'],
        '206B' => ['group' => 'GeneralPunctuation', 'name' => 'ACTIVATE SYMMETRIC SWAPPING'],
        '206C' => ['group' => 'GeneralPunctuation', 'name' => 'INHIBIT ARABIC FORM SHAPING'],
        '206D' => ['group' => 'GeneralPunctuation', 'name' => 'ACTIVATE ARABIC FORM SHAPING'],
        '206E' => ['group' => 'GeneralPunctuation', 'name' => 'NATIONAL DIGIT SHAPES'],
        '206F' => ['group' => 'GeneralPunctuation', 'name' => 'NOMINAL DIGIT SHAPES'],
        'FE00' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-1'],
        'FE01' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-2'],
        'FE02' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-3'],
        'FE03' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-4'],
        'FE04' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-5'],
        'FE05' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-6'],
        'FE06' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-7'],
        'FE07' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-8'],
        'FE08' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-9'],
        'FE09' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-10'],
        'FE0A' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-11'],
        'FE0B' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-12'],
        'FE0C' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-13'],
        'FE0D' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-14'],
        'FE0E' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-15'],
        'FE0F' => ['group' => 'VariationSelectors', 'name' => 'VARIATION SELECTOR-16'],
        'FEFF' => ['group' => 'ArabicPresentationFormsB', 'name' => 'ZERO WIDTH NO-BREAK SPACE'],
        '0009' => ['group' => 'BasicLatin', 'name' => 'CHARACTER TABULATION; HORIZONTAL TABULATION; HT; TAB'],
        '000A' => ['group' => 'BasicLatin', 'name' => 'END OF LINE; EOL; LF; LINE FEED; NEW LINE; NL'],
        '000B' => ['group' => 'BasicLatin', 'name' => 'LINE TABULATION; VERTICAL TABULATION; VT'],
        '000C' => ['group' => 'BasicLatin', 'name' => 'FF; FORM FEED'],
        '000D' => ['group' => 'BasicLatin', 'name' => 'CARRIAGE RETURN; CR'],
        '0020' => ['group' => 'BasicLatin', 'name' => 'SPACE'],
        '0085' => ['group' => 'Latin1Supplement', 'name' => 'NEL; NEXT LINE'],
        '2028' => ['group' => 'GeneralPunctuation', 'name' => 'LINE SEPARATOR'],
        '2029' => ['group' => 'GeneralPunctuation', 'name' => 'PARAGRAPH SEPARATOR'],
        '3000' => ['group' => 'CJKSymbolsandPunctuation', 'name' => 'IDEOGRAPHIC SPACE'],
        '1680' => ['group' => 'Ogham', 'name' => 'OGHAM SPACE MARK'],
        '2000' => ['group' => 'GeneralPunctuation', 'name' => 'EN QUAD'],
        '2001' => ['group' => 'GeneralPunctuation', 'name' => 'EM QUAD'],
        '2002' => ['group' => 'GeneralPunctuation', 'name' => 'EN SPACE'],
        '2003' => ['group' => 'GeneralPunctuation', 'name' => 'EM SPACE'],
        '2004' => ['group' => 'GeneralPunctuation', 'name' => 'THREE-PER-EM SPACE'],
        '2005' => ['group' => 'GeneralPunctuation', 'name' => 'FOUR-PER-EM SPACE'],
        '2006' => ['group' => 'GeneralPunctuation', 'name' => 'SIX-PER-EM SPACE'],
        '2007' => ['group' => 'GeneralPunctuation', 'name' => 'FIGURE SPACE'],
        '2008' => ['group' => 'GeneralPunctuation', 'name' => 'PUNCTUATION SPACE'],
        '2009' => ['group' => 'GeneralPunctuation', 'name' => 'THIN SPACE'],
        '200A' => ['group' => 'GeneralPunctuation', 'name' => 'HAIR SPACE'],
        '205F' => ['group' => 'GeneralPunctuation', 'name' => 'MEDIUM MATHEMATICAL SPACE'],
        '202F' => ['group' => 'GeneralPunctuation', 'name' => '	NARROW NO-BREAK SPACE'],
        '115F' => ['group' => 'HangulJamo', 'name' => 'HANGUL CHOSEONG FILLER'],
        '1160' => ['group' => 'HangulJamo', 'name' => 'HANGUL JUNGSEONG FILLER'],
        '3164' => ['group' => 'HangulCompatibilityJamo', 'name' => 'HANGUL FILLER'],
        'FFA0' => ['group' => 'HalfwidthandFullwidthForms', 'name' => 'HALFWIDTH HANGUL FILLER'],
        '1BCA0' => ['group' => 'ShorthandFormatControls', 'name' => 'SHORTHAND FORMAT LETTER OVERLAP'],
        '1BCA1' => ['group' => 'ShorthandFormatControls', 'name' => 'SHORTHAND FORMAT CONTINUING OVERLAP'],
        '1BCA2' => ['group' => 'ShorthandFormatControls', 'name' => 'SHORTHAND FORMAT DOWN STEP'],
        '1BCA3' => ['group' => 'ShorthandFormatControls', 'name' => 'SHORTHAND FORMAT UP STEP'],
        '1D173' => ['group' => 'MusicalSymbols', 'name' => 'MUSICAL SYMBOL BEGIN BEAM'],
        '1D174' => ['group' => 'MusicalSymbols', 'name' => 'MUSICAL SYMBOL END BEAM'],
        '1D175' => ['group' => 'MusicalSymbols', 'name' => 'MUSICAL SYMBOL BEGIN TIE'],
        '1D176' => ['group' => 'MusicalSymbols', 'name' => 'MUSICAL SYMBOL END TIE'],
        '1D177' => ['group' => 'MusicalSymbols', 'name' => 'MUSICAL SYMBOL BEGIN SLUR'],
        '1D178' => ['group' => 'MusicalSymbols', 'name' => 'MUSICAL SYMBOL END SLUR'],
        '1D179' => ['group' => 'MusicalSymbols', 'name' => 'MUSICAL SYMBOL BEGIN PHRASE'],
        '1D17A' => ['group' => 'MusicalSymbols', 'name' => 'MUSICAL SYMBOL END PHRASE'],
        'E0001' => ['group' => 'Tags', 'name' => 'LANGUAGE TAG'],
        'E0100' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-17'],
        'E0101' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-18'],
        'E0102' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-19'],
        'E0103' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-20'],
        'E0104' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-21'],
        'E0105' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-22'],
        'E0106' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-23'],
        'E0107' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-24'],
        'E0108' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-25'],
        'E0109' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-26'],
        'E010A' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-27'],
        'E010B' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-28'],
        'E010C' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-29'],
        'E010D' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-30'],
        'E010E' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-31'],
        'E010F' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-32'],
        'E0110' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-33'],
        'E0111' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-34'],
        'E0112' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-35'],
        'E0113' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-36'],
        'E0114' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-37'],
        'E0115' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-38'],
        'E0116' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-39'],
        'E0117' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-40'],
        'E0118' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-41'],
        'E0119' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-42'],
        'E011A' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-43'],
        'E011B' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-44'],
        'E011C' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-45'],
        'E011D' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-46'],
        'E011E' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-47'],
        'E011F' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-48'],
        'E0120' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-49'],
        'E0121' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-50'],
        'E0122' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-51'],
        'E0123' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-52'],
        'E0124' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-53'],
        'E0125' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-54'],
        'E0126' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-55'],
        'E0127' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-56'],
        'E0128' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-57'],
        'E0129' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-58'],
        'E012A' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-59'],
        'E012B' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-60'],
        'E012C' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-61'],
        'E012D' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-62'],
        'E012E' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-63'],
        'E012F' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-64'],
        'E0130' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-65'],
        'E0131' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-66'],
        'E0132' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-67'],
        'E0133' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-68'],
        'E0134' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-69'],
        'E0135' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-70'],
        'E0136' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-71'],
        'E0137' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-72'],
        'E0138' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-73'],
        'E0139' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-74'],
        'E013A' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-75'],
        'E013B' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-76'],
        'E013C' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-77'],
        'E013D' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-78'],
        'E013E' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-79'],
        'E013F' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-80'],
        'E0140' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-81'],
        'E0141' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-82'],
        'E0142' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-83'],
        'E0143' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-84'],
        'E0144' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-85'],
        'E0145' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-86'],
        'E0146' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-87'],
        'E0147' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-88'],
        'E0148' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-89'],
        'E0149' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-90'],
        'E014A' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-91'],
        'E014B' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-92'],
        'E014C' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-93'],
        'E014D' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-94'],
        'E014E' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-95'],
        'E014F' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-96'],
        'E0150' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-97'],
        'E0151' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-98'],
        'E0152' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-99'],
        'E0153' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-100'],
        'E0154' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-101'],
        'E0155' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-102'],
        'E0156' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-103'],
        'E0157' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-104'],
        'E0158' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-105'],
        'E0159' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-106'],
        'E015A' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-107'],
        'E015B' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-108'],
        'E015C' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-109'],
        'E015D' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-110'],
        'E015E' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-111'],
        'E015F' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-112'],
        'E0160' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-113'],
        'E0161' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-114'],
        'E0162' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-115'],
        'E0163' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-116'],
        'E0164' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-117'],
        'E0165' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-118'],
        'E0166' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-119'],
        'E0167' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-120'],
        'E0168' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-121'],
        'E0169' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-122'],
        'E016A' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-123'],
        'E016B' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-124'],
        'E016C' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-125'],
        'E016D' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-126'],
        'E016E' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-127'],
        'E016F' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-128'],
        'E0170' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-129'],
        'E0171' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-130'],
        'E0172' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-131'],
        'E0173' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-132'],
        'E0174' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-133'],
        'E0175' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-134'],
        'E0176' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-135'],
        'E0177' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-136'],
        'E0178' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-137'],
        'E0179' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-138'],
        'E017A' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-139'],
        'E017B' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-140'],
        'E017C' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-141'],
        'E017D' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-142'],
        'E017E' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-143'],
        'E017F' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-144'],
        'E0180' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-145'],
        'E0181' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-146'],
        'E0182' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-147'],
        'E0183' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-148'],
        'E0184' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-149'],
        'E0185' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-150'],
        'E0186' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-151'],
        'E0187' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-152'],
        'E0188' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-153'],
        'E0189' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-154'],
        'E018A' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-155'],
        'E018B' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-156'],
        'E018C' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-157'],
        'E018D' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-158'],
        'E018E' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-159'],
        'E018F' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-160'],
        'E0190' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-161'],
        'E0191' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-162'],
        'E0192' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-163'],
        'E0193' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-164'],
        'E0194' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-165'],
        'E0195' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-166'],
        'E0196' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-167'],
        'E0197' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-168'],
        'E0198' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-169'],
        'E0199' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-170'],
        'E019A' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-171'],
        'E019B' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-172'],
        'E019C' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-173'],
        'E019D' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-174'],
        'E019E' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-175'],
        'E019F' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-176'],
        'E01A0' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-177'],
        'E01A1' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-178'],
        'E01A2' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-179'],
        'E01A3' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-180'],
        'E01A4' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-181'],
        'E01A5' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-182'],
        'E01A6' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-183'],
        'E01A7' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-184'],
        'E01A8' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-185'],
        'E01A9' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-186'],
        'E01AA' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-187'],
        'E01AB' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-188'],
        'E01AC' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-189'],
        'E01AD' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-190'],
        'E01AE' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-191'],
        'E01AF' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-192'],
        'E01B0' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-193'],
        'E01B1' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-194'],
        'E01B2' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-195'],
        'E01B3' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-196'],
        'E01B4' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-197'],
        'E01B5' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-198'],
        'E01B6' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-199'],
        'E01B7' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-200'],
        'E01B8' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-201'],
        'E01B9' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-202'],
        'E01BA' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-203'],
        'E01BB' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-204'],
        'E01BC' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-205'],
        'E01BD' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-206'],
        'E01BE' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-207'],
        'E01BF' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-208'],
        'E01C0' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-209'],
        'E01C1' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-210'],
        'E01C2' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-211'],
        'E01C3' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-212'],
        'E01C4' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-213'],
        'E01C5' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-214'],
        'E01C6' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-215'],
        'E01C7' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-216'],
        'E01C8' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-217'],
        'E01C9' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-218'],
        'E01CA' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-219'],
        'E01CB' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-220'],
        'E01CC' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-221'],
        'E01CD' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-222'],
        'E01CE' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-223'],
        'E01CF' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-224'],
        'E01D0' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-225'],
        'E01D1' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-226'],
        'E01D2' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-227'],
        'E01D3' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-228'],
        'E01D4' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-229'],
        'E01D5' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-230'],
        'E01D6' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-231'],
        'E01D7' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-232'],
        'E01D8' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-233'],
        'E01D9' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-234'],
        'E01DA' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-235'],
        'E01DB' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-236'],
        'E01DC' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-237'],
        'E01DD' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-238'],
        'E01DE' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-239'],
        'E01DF' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-240'],
        'E01E0' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-241'],
        'E01E1' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-242'],
        'E01E2' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-243'],
        'E01E3' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-244'],
        'E01E4' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-245'],
        'E01E5' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-246'],
        'E01E6' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-247'],
        'E01E7' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-248'],
        'E01E8' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-249'],
        'E01E9' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-250'],
        'E01EA' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-251'],
        'E01EB' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-252'],
        'E01EC' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-253'],
        'E01ED' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-254'],
        'E01EE' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-255'],
        'E01EF' => ['group' => 'VariationSelectorsSupplement', 'name' => 'VARIATION SELECTOR-256'],
    ];

    /**
     * Returns an array with all codepoints
     *
     * @return array
     */
    public function getIndex()
    {
        return self::codepoints;
    }

    /**
     * Returns the regex pattern for the characters in this index. If $withSpaceAndLineFeed is
     * set to true, the pattern will also match the line feed and normal space character.
     *
     * @param bool $withSpaceAndLineFeed
     * @return string
     */
    public function getRegexPattern(bool $withSpaceAndLineFeed = true): string
    {
        $pattern = '';
        foreach (array_keys(self::codepoints) as $codepointHex) {
            if (!$withSpaceAndLineFeed && ($codepointHex === '0020' || $codepointHex === '000A')) {
                continue;
            }

            $pattern .= '\x{' . $codepointHex . '}';
        }

        return $pattern;
    }

    /**
     * Returns the codepoint information for the given hex code, or null
     * if the codepoint is not available in this index.
     *
     * @param string $hex
     * @return null|string
     */
    public function getCodepoint(string $hex): ?array
    {
        if (!isset(self::codepoints[$hex])) {
            return null;
        }

        return self::codepoints[$hex];
    }

    /**
     * Returns the hex code for the given character.
     *
     * @param string $character
     * @return string
     */
    public function getCharacterHex(string $character): string
    {
        $hex = strtoupper(dechex(mb_ord($character)));

        if (strlen($hex) < 4) {
            $hex = str_pad($hex, 4, '0', STR_PAD_LEFT);
        }

        return $hex;
    }
}