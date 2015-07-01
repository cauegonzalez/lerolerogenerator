<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class APIController extends BaseController
{
    /**
     * Returns the generated random phrase
     *
     * @param string $language
     * @return string $phrase
     */

    public function getLeroLero($language)
    {
        $phrase = $language;
        return $phrase;
    }
}
