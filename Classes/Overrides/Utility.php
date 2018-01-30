<?php

namespace Webit\RealurlSuomiurl\Overrides;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Lidia Demin <demin@webit.de>, webit! Gesellschaft für neue Medien mbH
 *  (c) Boris Andrachnik
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

class Utility extends \DmitryDulepov\Realurl\Utility
{

    /**
     * Converts a given string to a string that can be used as a URL segment.
     * The result is not url-encoded.
     *
     * @param string $processedTitle
     * @param string $spaceCharacter
     * @param bool $strToLower
     *
     * @return string
     */
    public function convertToSafeString($processedTitle, $spaceCharacter = '-', $strToLower = true)
    {
        // Special conversion for suomi (finish) URLs
        $domain = explode('.', $_SERVER['SERVER_NAME']);
        if (in_array('fi', $domain, false)) {
            $suomiCharacterMapping = [
                'ä' => 'a',
                'å' => 'a',
                'ö' => 'o',
                'Ä' => 'A',
                'Ö' => 'O'
            ];
            $processedTitle = strtr($processedTitle, $suomiCharacterMapping);
        }

        return parent::convertToSafeString($processedTitle, $spaceCharacter, $strToLower);
    }
}
