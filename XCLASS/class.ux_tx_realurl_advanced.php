<?php



class ux_tx_realurl_advanced extends tx_realurl_advanced
{

    function encodeTitle($title)
    {

        $config_language  = $GLOBALS['TSFE']->tmpl->setup['config.']['language'];
        $domain  = explode('.', $_SERVER['SERVER_NAME']);

        # if ($config_language == 'fi')
        if (in_array('fi',$domain) ) {
            $trans_suomi_umlaute = array ("ä"=>'a',"å"=>"a","ö"=>"o","Ä"=>"A","Ö"=>"O" );
            $title =strtr($title, $trans_suomi_umlaute);
        }

       return  parent::encodeTitle($title);
    }


} 