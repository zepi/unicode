<?php

/**
 * The UnicodeIndex to help with the block classes
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 * @copyright 2022 Matthias Zobrist
 * @license MIT
 */

namespace zepi\Unicode;

use zepi\Unicode\Block\AbstractBlock;

/**
 * The UnicodeIndex to help with the block classes
 *
 * @author Matthias Zobrist <matthias.zobrist@zepi.net>
 */
class UnicodeIndex
{
    const classes = [
        'AegeanNumbers' => 'zepi\Unicode\Block\AegeanNumbersBlock',
        'Ahom' => 'zepi\Unicode\Block\AhomBlock',
        'AlchemicalSymbols' => 'zepi\Unicode\Block\AlchemicalSymbolsBlock',
        'AlphabeticPresentationForms' => 'zepi\Unicode\Block\AlphabeticPresentationFormsBlock',
        'AnatolianHieroglyphs' => 'zepi\Unicode\Block\AnatolianHieroglyphsBlock',
        'AncientGreekMusicalNotation' => 'zepi\Unicode\Block\AncientGreekMusicalNotationBlock',
        'AncientGreekNumbers' => 'zepi\Unicode\Block\AncientGreekNumbersBlock',
        'AncientSymbols' => 'zepi\Unicode\Block\AncientSymbolsBlock',
        'Arabic' => 'zepi\Unicode\Block\ArabicBlock',
        'ArabicExtendedA' => 'zepi\Unicode\Block\ArabicExtendedABlock',
        'ArabicMathematicalAlphabeticSymbols' => 'zepi\Unicode\Block\ArabicMathematicalAlphabeticSymbolsBlock',
        'ArabicPresentationFormsA' => 'zepi\Unicode\Block\ArabicPresentationFormsABlock',
        'ArabicPresentationFormsB' => 'zepi\Unicode\Block\ArabicPresentationFormsBBlock',
        'ArabicSupplement' => 'zepi\Unicode\Block\ArabicSupplementBlock',
        'Armenian' => 'zepi\Unicode\Block\ArmenianBlock',
        'Arrows' => 'zepi\Unicode\Block\ArrowsBlock',
        'Avestan' => 'zepi\Unicode\Block\AvestanBlock',
        'Balinese' => 'zepi\Unicode\Block\BalineseBlock',
        'Bamum' => 'zepi\Unicode\Block\BamumBlock',
        'BamumSupplement' => 'zepi\Unicode\Block\BamumSupplementBlock',
        'BasicLatin' => 'zepi\Unicode\Block\BasicLatinBlock',
        'BassaVah' => 'zepi\Unicode\Block\BassaVahBlock',
        'Batak' => 'zepi\Unicode\Block\BatakBlock',
        'Bengali' => 'zepi\Unicode\Block\BengaliBlock',
        'BlockElements' => 'zepi\Unicode\Block\BlockElementsBlock',
        'Bopomofo' => 'zepi\Unicode\Block\BopomofoBlock',
        'BopomofoExtended' => 'zepi\Unicode\Block\BopomofoExtendedBlock',
        'BoxDrawing' => 'zepi\Unicode\Block\BoxDrawingBlock',
        'Brahmi' => 'zepi\Unicode\Block\BrahmiBlock',
        'BraillePatterns' => 'zepi\Unicode\Block\BraillePatternsBlock',
        'Buginese' => 'zepi\Unicode\Block\BugineseBlock',
        'Buhid' => 'zepi\Unicode\Block\BuhidBlock',
        'ByzantineMusicalSymbols' => 'zepi\Unicode\Block\ByzantineMusicalSymbolsBlock',
        'CJKCompatibility' => 'zepi\Unicode\Block\CJKCompatibilityBlock',
        'CJKCompatibilityForms' => 'zepi\Unicode\Block\CJKCompatibilityFormsBlock',
        'CJKCompatibilityIdeographs' => 'zepi\Unicode\Block\CJKCompatibilityIdeographsBlock',
        'CJKCompatibilityIdeographsSupplement' => 'zepi\Unicode\Block\CJKCompatibilityIdeographsSupplementBlock',
        'CJKRadicalsSupplement' => 'zepi\Unicode\Block\CJKRadicalsSupplementBlock',
        'CJKStrokes' => 'zepi\Unicode\Block\CJKStrokesBlock',
        'CJKSymbolsandPunctuation' => 'zepi\Unicode\Block\CJKSymbolsandPunctuationBlock',
        'CJKUnifiedIdeographs' => 'zepi\Unicode\Block\CJKUnifiedIdeographsBlock',
        'CJKUnifiedIdeographsExtensionA' => 'zepi\Unicode\Block\CJKUnifiedIdeographsExtensionABlock',
        'CJKUnifiedIdeographsExtensionB' => 'zepi\Unicode\Block\CJKUnifiedIdeographsExtensionBBlock',
        'CJKUnifiedIdeographsExtensionC' => 'zepi\Unicode\Block\CJKUnifiedIdeographsExtensionCBlock',
        'CJKUnifiedIdeographsExtensionD' => 'zepi\Unicode\Block\CJKUnifiedIdeographsExtensionDBlock',
        'CJKUnifiedIdeographsExtensionE' => 'zepi\Unicode\Block\CJKUnifiedIdeographsExtensionEBlock',
        'Carian' => 'zepi\Unicode\Block\CarianBlock',
        'CaucasianAlbanian' => 'zepi\Unicode\Block\CaucasianAlbanianBlock',
        'Chakma' => 'zepi\Unicode\Block\ChakmaBlock',
        'Cham' => 'zepi\Unicode\Block\ChamBlock',
        'Cherokee' => 'zepi\Unicode\Block\CherokeeBlock',
        'CherokeeSupplement' => 'zepi\Unicode\Block\CherokeeSupplementBlock',
        'CombiningDiacriticalMarks' => 'zepi\Unicode\Block\CombiningDiacriticalMarksBlock',
        'CombiningDiacriticalMarksExtended' => 'zepi\Unicode\Block\CombiningDiacriticalMarksExtendedBlock',
        'CombiningDiacriticalMarksSupplement' => 'zepi\Unicode\Block\CombiningDiacriticalMarksSupplementBlock',
        'CombiningDiacriticalMarksforSymbols' => 'zepi\Unicode\Block\CombiningDiacriticalMarksforSymbolsBlock',
        'CombiningHalfMarks' => 'zepi\Unicode\Block\CombiningHalfMarksBlock',
        'CommonIndicNumberForms' => 'zepi\Unicode\Block\CommonIndicNumberFormsBlock',
        'ControlPictures' => 'zepi\Unicode\Block\ControlPicturesBlock',
        'Coptic' => 'zepi\Unicode\Block\CopticBlock',
        'CopticEpactNumbers' => 'zepi\Unicode\Block\CopticEpactNumbersBlock',
        'CountingRodNumerals' => 'zepi\Unicode\Block\CountingRodNumeralsBlock',
        'Cuneiform' => 'zepi\Unicode\Block\CuneiformBlock',
        'CuneiformNumbersandPunctuation' => 'zepi\Unicode\Block\CuneiformNumbersandPunctuationBlock',
        'CurrencySymbols' => 'zepi\Unicode\Block\CurrencySymbolsBlock',
        'CypriotSyllabary' => 'zepi\Unicode\Block\CypriotSyllabaryBlock',
        'Cyrillic' => 'zepi\Unicode\Block\CyrillicBlock',
        'CyrillicExtendedA' => 'zepi\Unicode\Block\CyrillicExtendedABlock',
        'CyrillicExtendedB' => 'zepi\Unicode\Block\CyrillicExtendedBBlock',
        'CyrillicSupplement' => 'zepi\Unicode\Block\CyrillicSupplementBlock',
        'Deseret' => 'zepi\Unicode\Block\DeseretBlock',
        'Devanagari' => 'zepi\Unicode\Block\DevanagariBlock',
        'DevanagariExtended' => 'zepi\Unicode\Block\DevanagariExtendedBlock',
        'Dingbats' => 'zepi\Unicode\Block\DingbatsBlock',
        'DominoTiles' => 'zepi\Unicode\Block\DominoTilesBlock',
        'Duployan' => 'zepi\Unicode\Block\DuployanBlock',
        'EarlyDynasticCuneiform' => 'zepi\Unicode\Block\EarlyDynasticCuneiformBlock',
        'EgyptianHieroglyphs' => 'zepi\Unicode\Block\EgyptianHieroglyphsBlock',
        'Elbasan' => 'zepi\Unicode\Block\ElbasanBlock',
        'Emoticons' => 'zepi\Unicode\Block\EmoticonsBlock',
        'EnclosedAlphanumericSupplement' => 'zepi\Unicode\Block\EnclosedAlphanumericSupplementBlock',
        'EnclosedAlphanumerics' => 'zepi\Unicode\Block\EnclosedAlphanumericsBlock',
        'EnclosedCJKLettersandMonths' => 'zepi\Unicode\Block\EnclosedCJKLettersandMonthsBlock',
        'EnclosedIdeographicSupplement' => 'zepi\Unicode\Block\EnclosedIdeographicSupplementBlock',
        'Ethiopic' => 'zepi\Unicode\Block\EthiopicBlock',
        'EthiopicExtended' => 'zepi\Unicode\Block\EthiopicExtendedBlock',
        'EthiopicExtendedA' => 'zepi\Unicode\Block\EthiopicExtendedABlock',
        'EthiopicSupplement' => 'zepi\Unicode\Block\EthiopicSupplementBlock',
        'GeneralPunctuation' => 'zepi\Unicode\Block\GeneralPunctuationBlock',
        'GeometricShapes' => 'zepi\Unicode\Block\GeometricShapesBlock',
        'GeometricShapesExtended' => 'zepi\Unicode\Block\GeometricShapesExtendedBlock',
        'Georgian' => 'zepi\Unicode\Block\GeorgianBlock',
        'GeorgianSupplement' => 'zepi\Unicode\Block\GeorgianSupplementBlock',
        'Glagolitic' => 'zepi\Unicode\Block\GlagoliticBlock',
        'Gothic' => 'zepi\Unicode\Block\GothicBlock',
        'Grantha' => 'zepi\Unicode\Block\GranthaBlock',
        'GreekExtended' => 'zepi\Unicode\Block\GreekExtendedBlock',
        'GreekandCoptic' => 'zepi\Unicode\Block\GreekandCopticBlock',
        'Gujarati' => 'zepi\Unicode\Block\GujaratiBlock',
        'Gurmukhi' => 'zepi\Unicode\Block\GurmukhiBlock',
        'HalfwidthandFullwidthForms' => 'zepi\Unicode\Block\HalfwidthandFullwidthFormsBlock',
        'HangulCompatibilityJamo' => 'zepi\Unicode\Block\HangulCompatibilityJamoBlock',
        'HangulJamo' => 'zepi\Unicode\Block\HangulJamoBlock',
        'HangulJamoExtendedA' => 'zepi\Unicode\Block\HangulJamoExtendedABlock',
        'HangulJamoExtendedB' => 'zepi\Unicode\Block\HangulJamoExtendedBBlock',
        'HangulSyllables' => 'zepi\Unicode\Block\HangulSyllablesBlock',
        'Hanunoo' => 'zepi\Unicode\Block\HanunooBlock',
        'Hatran' => 'zepi\Unicode\Block\HatranBlock',
        'Hebrew' => 'zepi\Unicode\Block\HebrewBlock',
        'Hiragana' => 'zepi\Unicode\Block\HiraganaBlock',
        'IPAExtensions' => 'zepi\Unicode\Block\IPAExtensionsBlock',
        'IdeographicDescriptionCharacters' => 'zepi\Unicode\Block\IdeographicDescriptionCharactersBlock',
        'ImperialAramaic' => 'zepi\Unicode\Block\ImperialAramaicBlock',
        'InscriptionalPahlavi' => 'zepi\Unicode\Block\InscriptionalPahlaviBlock',
        'InscriptionalParthian' => 'zepi\Unicode\Block\InscriptionalParthianBlock',
        'Javanese' => 'zepi\Unicode\Block\JavaneseBlock',
        'Kaithi' => 'zepi\Unicode\Block\KaithiBlock',
        'KanaSupplement' => 'zepi\Unicode\Block\KanaSupplementBlock',
        'Kanbun' => 'zepi\Unicode\Block\KanbunBlock',
        'KangxiRadicals' => 'zepi\Unicode\Block\KangxiRadicalsBlock',
        'Kannada' => 'zepi\Unicode\Block\KannadaBlock',
        'Katakana' => 'zepi\Unicode\Block\KatakanaBlock',
        'KatakanaPhoneticExtensions' => 'zepi\Unicode\Block\KatakanaPhoneticExtensionsBlock',
        'KayahLi' => 'zepi\Unicode\Block\KayahLiBlock',
        'Kharoshthi' => 'zepi\Unicode\Block\KharoshthiBlock',
        'Khmer' => 'zepi\Unicode\Block\KhmerBlock',
        'KhmerSymbols' => 'zepi\Unicode\Block\KhmerSymbolsBlock',
        'Khojki' => 'zepi\Unicode\Block\KhojkiBlock',
        'Khudawadi' => 'zepi\Unicode\Block\KhudawadiBlock',
        'Lao' => 'zepi\Unicode\Block\LaoBlock',
        'Latin1Supplement' => 'zepi\Unicode\Block\Latin1SupplementBlock',
        'LatinExtendedA' => 'zepi\Unicode\Block\LatinExtendedABlock',
        'LatinExtendedAdditional' => 'zepi\Unicode\Block\LatinExtendedAdditionalBlock',
        'LatinExtendedB' => 'zepi\Unicode\Block\LatinExtendedBBlock',
        'LatinExtendedC' => 'zepi\Unicode\Block\LatinExtendedCBlock',
        'LatinExtendedD' => 'zepi\Unicode\Block\LatinExtendedDBlock',
        'LatinExtendedE' => 'zepi\Unicode\Block\LatinExtendedEBlock',
        'Lepcha' => 'zepi\Unicode\Block\LepchaBlock',
        'LetterlikeSymbols' => 'zepi\Unicode\Block\LetterlikeSymbolsBlock',
        'Limbu' => 'zepi\Unicode\Block\LimbuBlock',
        'LinearA' => 'zepi\Unicode\Block\LinearABlock',
        'LinearBIdeograms' => 'zepi\Unicode\Block\LinearBIdeogramsBlock',
        'LinearBSyllabary' => 'zepi\Unicode\Block\LinearBSyllabaryBlock',
        'Lisu' => 'zepi\Unicode\Block\LisuBlock',
        'Lycian' => 'zepi\Unicode\Block\LycianBlock',
        'Lydian' => 'zepi\Unicode\Block\LydianBlock',
        'Mahajani' => 'zepi\Unicode\Block\MahajaniBlock',
        'MahjongTiles' => 'zepi\Unicode\Block\MahjongTilesBlock',
        'Malayalam' => 'zepi\Unicode\Block\MalayalamBlock',
        'Mandaic' => 'zepi\Unicode\Block\MandaicBlock',
        'Manichaean' => 'zepi\Unicode\Block\ManichaeanBlock',
        'MathematicalAlphanumericSymbols' => 'zepi\Unicode\Block\MathematicalAlphanumericSymbolsBlock',
        'MathematicalOperators' => 'zepi\Unicode\Block\MathematicalOperatorsBlock',
        'MeeteiMayek' => 'zepi\Unicode\Block\MeeteiMayekBlock',
        'MeeteiMayekExtensions' => 'zepi\Unicode\Block\MeeteiMayekExtensionsBlock',
        'MendeKikakui' => 'zepi\Unicode\Block\MendeKikakuiBlock',
        'MeroiticCursive' => 'zepi\Unicode\Block\MeroiticCursiveBlock',
        'MeroiticHieroglyphs' => 'zepi\Unicode\Block\MeroiticHieroglyphsBlock',
        'Miao' => 'zepi\Unicode\Block\MiaoBlock',
        'MiscellaneousMathematicalSymbolsA' => 'zepi\Unicode\Block\MiscellaneousMathematicalSymbolsABlock',
        'MiscellaneousMathematicalSymbolsB' => 'zepi\Unicode\Block\MiscellaneousMathematicalSymbolsBBlock',
        'MiscellaneousSymbols' => 'zepi\Unicode\Block\MiscellaneousSymbolsBlock',
        'MiscellaneousSymbolsandArrows' => 'zepi\Unicode\Block\MiscellaneousSymbolsandArrowsBlock',
        'MiscellaneousSymbolsandPictographs' => 'zepi\Unicode\Block\MiscellaneousSymbolsandPictographsBlock',
        'MiscellaneousTechnical' => 'zepi\Unicode\Block\MiscellaneousTechnicalBlock',
        'Modi' => 'zepi\Unicode\Block\ModiBlock',
        'ModifierToneLetters' => 'zepi\Unicode\Block\ModifierToneLettersBlock',
        'Mongolian' => 'zepi\Unicode\Block\MongolianBlock',
        'Mro' => 'zepi\Unicode\Block\MroBlock',
        'Multani' => 'zepi\Unicode\Block\MultaniBlock',
        'MusicalSymbols' => 'zepi\Unicode\Block\MusicalSymbolsBlock',
        'Myanmar' => 'zepi\Unicode\Block\MyanmarBlock',
        'MyanmarExtendedA' => 'zepi\Unicode\Block\MyanmarExtendedABlock',
        'MyanmarExtendedB' => 'zepi\Unicode\Block\MyanmarExtendedBBlock',
        'NKo' => 'zepi\Unicode\Block\NKoBlock',
        'Nabataean' => 'zepi\Unicode\Block\NabataeanBlock',
        'NewTaiLue' => 'zepi\Unicode\Block\NewTaiLueBlock',
        'NumberForms' => 'zepi\Unicode\Block\NumberFormsBlock',
        'Ogham' => 'zepi\Unicode\Block\OghamBlock',
        'OlChiki' => 'zepi\Unicode\Block\OlChikiBlock',
        'OldHungarian' => 'zepi\Unicode\Block\OldHungarianBlock',
        'OldItalic' => 'zepi\Unicode\Block\OldItalicBlock',
        'OldNorthArabian' => 'zepi\Unicode\Block\OldNorthArabianBlock',
        'OldPermic' => 'zepi\Unicode\Block\OldPermicBlock',
        'OldPersian' => 'zepi\Unicode\Block\OldPersianBlock',
        'OldSouthArabian' => 'zepi\Unicode\Block\OldSouthArabianBlock',
        'OldTurkic' => 'zepi\Unicode\Block\OldTurkicBlock',
        'OpticalCharacterRecognition' => 'zepi\Unicode\Block\OpticalCharacterRecognitionBlock',
        'Oriya' => 'zepi\Unicode\Block\OriyaBlock',
        'OrnamentalDingbats' => 'zepi\Unicode\Block\OrnamentalDingbatsBlock',
        'Osmanya' => 'zepi\Unicode\Block\OsmanyaBlock',
        'PahawhHmong' => 'zepi\Unicode\Block\PahawhHmongBlock',
        'Palmyrene' => 'zepi\Unicode\Block\PalmyreneBlock',
        'PauCinHau' => 'zepi\Unicode\Block\PauCinHauBlock',
        'Phagspa' => 'zepi\Unicode\Block\PhagspaBlock',
        'PhaistosDisc' => 'zepi\Unicode\Block\PhaistosDiscBlock',
        'Phoenician' => 'zepi\Unicode\Block\PhoenicianBlock',
        'PhoneticExtensions' => 'zepi\Unicode\Block\PhoneticExtensionsBlock',
        'PhoneticExtensionsSupplement' => 'zepi\Unicode\Block\PhoneticExtensionsSupplementBlock',
        'PlayingCards' => 'zepi\Unicode\Block\PlayingCardsBlock',
        'PrivateUseArea' => 'zepi\Unicode\Block\PrivateUseAreaBlock',
        'PsalterPahlavi' => 'zepi\Unicode\Block\PsalterPahlaviBlock',
        'Rejang' => 'zepi\Unicode\Block\RejangBlock',
        'RumiNumeralSymbols' => 'zepi\Unicode\Block\RumiNumeralSymbolsBlock',
        'Runic' => 'zepi\Unicode\Block\RunicBlock',
        'Samaritan' => 'zepi\Unicode\Block\SamaritanBlock',
        'Saurashtra' => 'zepi\Unicode\Block\SaurashtraBlock',
        'Sharada' => 'zepi\Unicode\Block\SharadaBlock',
        'Shavian' => 'zepi\Unicode\Block\ShavianBlock',
        'ShorthandFormatControls' => 'zepi\Unicode\Block\ShorthandFormatControlsBlock',
        'Siddham' => 'zepi\Unicode\Block\SiddhamBlock',
        'Sinhala' => 'zepi\Unicode\Block\SinhalaBlock',
        'SinhalaArchaicNumbers' => 'zepi\Unicode\Block\SinhalaArchaicNumbersBlock',
        'SmallFormVariants' => 'zepi\Unicode\Block\SmallFormVariantsBlock',
        'SoraSompeng' => 'zepi\Unicode\Block\SoraSompengBlock',
        'SpacingModifierLetters' => 'zepi\Unicode\Block\SpacingModifierLettersBlock',
        'Specials' => 'zepi\Unicode\Block\SpecialsBlock',
        'Sundanese' => 'zepi\Unicode\Block\SundaneseBlock',
        'SundaneseSupplement' => 'zepi\Unicode\Block\SundaneseSupplementBlock',
        'SuperscriptsandSubscripts' => 'zepi\Unicode\Block\SuperscriptsandSubscriptsBlock',
        'SupplementalArrowsA' => 'zepi\Unicode\Block\SupplementalArrowsABlock',
        'SupplementalArrowsB' => 'zepi\Unicode\Block\SupplementalArrowsBBlock',
        'SupplementalArrowsC' => 'zepi\Unicode\Block\SupplementalArrowsCBlock',
        'SupplementalMathematicalOperators' => 'zepi\Unicode\Block\SupplementalMathematicalOperatorsBlock',
        'SupplementalPunctuation' => 'zepi\Unicode\Block\SupplementalPunctuationBlock',
        'SupplementalSymbolsandPictographs' => 'zepi\Unicode\Block\SupplementalSymbolsandPictographsBlock',
        'SupplementaryPrivateUseAreaA' => 'zepi\Unicode\Block\SupplementaryPrivateUseAreaABlock',
        'SupplementaryPrivateUseAreaB' => 'zepi\Unicode\Block\SupplementaryPrivateUseAreaBBlock',
        'SuttonSignWriting' => 'zepi\Unicode\Block\SuttonSignWritingBlock',
        'SylotiNagri' => 'zepi\Unicode\Block\SylotiNagriBlock',
        'Syriac' => 'zepi\Unicode\Block\SyriacBlock',
        'Tagalog' => 'zepi\Unicode\Block\TagalogBlock',
        'Tagbanwa' => 'zepi\Unicode\Block\TagbanwaBlock',
        'Tags' => 'zepi\Unicode\Block\TagsBlock',
        'TaiLe' => 'zepi\Unicode\Block\TaiLeBlock',
        'TaiTham' => 'zepi\Unicode\Block\TaiThamBlock',
        'TaiViet' => 'zepi\Unicode\Block\TaiVietBlock',
        'TaiXuanJingSymbols' => 'zepi\Unicode\Block\TaiXuanJingSymbolsBlock',
        'Takri' => 'zepi\Unicode\Block\TakriBlock',
        'Tamil' => 'zepi\Unicode\Block\TamilBlock',
        'Telugu' => 'zepi\Unicode\Block\TeluguBlock',
        'Thaana' => 'zepi\Unicode\Block\ThaanaBlock',
        'Thai' => 'zepi\Unicode\Block\ThaiBlock',
        'Tibetan' => 'zepi\Unicode\Block\TibetanBlock',
        'Tifinagh' => 'zepi\Unicode\Block\TifinaghBlock',
        'Tirhuta' => 'zepi\Unicode\Block\TirhutaBlock',
        'TransportandMapSymbols' => 'zepi\Unicode\Block\TransportandMapSymbolsBlock',
        'Ugaritic' => 'zepi\Unicode\Block\UgariticBlock',
        'UnifiedCanadianAboriginalSyllabics' => 'zepi\Unicode\Block\UnifiedCanadianAboriginalSyllabicsBlock',
        'UnifiedCanadianAboriginalSyllabicsExtended' => 'zepi\Unicode\Block\UnifiedCanadianAboriginalSyllabicsExtendedBlock',
        'Vai' => 'zepi\Unicode\Block\VaiBlock',
        'VariationSelectors' => 'zepi\Unicode\Block\VariationSelectorsBlock',
        'VariationSelectorsSupplement' => 'zepi\Unicode\Block\VariationSelectorsSupplementBlock',
        'VedicExtensions' => 'zepi\Unicode\Block\VedicExtensionsBlock',
        'VerticalForms' => 'zepi\Unicode\Block\VerticalFormsBlock',
        'WarangCiti' => 'zepi\Unicode\Block\WarangCitiBlock',
        'YiRadicals' => 'zepi\Unicode\Block\YiRadicalsBlock',
        'YiSyllables' => 'zepi\Unicode\Block\YiSyllablesBlock',
        'YijingHexagramSymbols' => 'zepi\Unicode\Block\YijingHexagramSymbolsBlock',
    ];

    /**
     * Returns an array with all block class names
     *
     * @return array
     */
    public function getIndex(): array
    {
        return self::classes;
    }

    /**
     * Returns an array with all block objects
     *
     * @return array
     */
    public function getBlocks(): array
    {
        $blocks = [];
        foreach (self::classes as $className) {
            $blocks[] = new $className();
        }

        return $blocks;
    }

    /**
     * Returns the block class for the given key or null, if the key does not exist3
     *
     * @param string $key
     * @return null|string
     */
    public function getBlockClassByKey(string $key): ?string
    {
        if (!isset(self::classes[$key])) {
            return null;
        }

        return self::classes[$key];
    }

    /**
     * Returns the block object for the given key or null, if the key does not exist.
     *
     * @param string $key
     * @return null|\zepi\Unicode\Block\AbstractBlock
     */
    public function getBlockByKey(string $key): ?AbstractBlock
    {
        $className = $this->getBlockClassByKey($key);
        if ($className === null) {
            return null;
        }

        return new $className();
    }
}