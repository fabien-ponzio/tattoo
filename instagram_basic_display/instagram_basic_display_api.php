<?php
echo"cc tu vas me la pondre cette api ???"; 

    require_once('defines.php');   

    class instagram_basic_dispay_api{
        private $_appId = INSTAGRAM_APP_ID ;
        private $_appSecret = INSTAGRAM_APP_SECRET ; 
        // private $_redirectUrl = INSTAGRAM_APP_REDIRECT_URI ;
        private $_getCode = '';
        private $_apiBaseUrl ='https://api.instagram.com/'; 

    function __construct($params)
    {
        //insérer Token BUT HOWWWWWWWWW
        //INSERER CODE TOKEN ICI MAIS COMMENT ????
        $this->_getCode = $params['get_code'];
        $this->_setAuthorizationUrl(); 
    }

    private function _setAuthorizationUrl(){
        $getVars = array(
            'app_id' => $this->_appId, 
            'redirect_uri' => $this->_redirectUrl, 
            'scope' => 'user_profile, user_media', 
            'response_type' => 'code'
        );

        //Création URL
        $this->authorizationUrl = $this->_apiBaseUrl . 'oauth/authorize?' . http_build_query($getVars); 
    }
}

?>