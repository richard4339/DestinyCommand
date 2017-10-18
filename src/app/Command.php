<?php
namespace App;

use App\Command\Query;

/**
 * Class Command
 * @package App
 */
class Command
{

    /**
     * @var string
     */
    public $user;

    /**
     * @var
     */
    public $userId;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $bot;

    /**
     * @var string
     */
    public $defaultConsole;

    /**
     * @var string
     */
    public $responseUser;

    /**
     * Command constructor.
     */
    public function __construct()
    {
        
    }

    /**
     * @param $strUser
     */
    public function setUser($strUser)
    {
        $this->user = $strUser;
        $this->responseUser = $strUser;
    }

    /**
     * @param $strUser
     */
    public function setResponseUser($strUser)
    {
        if(!is_null($strUser) && trim($strUser) != "")
        {
            $strUser = trim($strUser);
            if($strUser[0] == '@' && strlen($strUser) > 1) $strUser = substr($strUser, 1);
            $this->responseUser = $strUser;
        }
    }

    /**
     * @param $iUserId
     */
    public function setUserId($iUserId)
    {
        $this->userId = $iUserId;
    }

    /**
     * @param string $strToken
     */
    public function setToken($strToken)
    {
        $this->token = $strToken;
    }

    /**
     * @param string $strChannel
     */
    public function setChannel($strChannel)
    {
        $this->channel = $strChannel;
    }

    /**
     * @param string $strQuery
     */
    public function setQuery($strQuery)
    {
        if(is_null($strQuery)) $strQuery = 'default_info';
        $this->query = new Query($strQuery);
    }

    /**
     * @param string $strBot
     */
    public function setBot($strBot)
    {
        if(is_null($strBot)) $strQuery = 'nightbot';
        $this->bot = strtolower($strBot);
    }

    /**
     * @param $strConsole
     */
    public function setDefaultConsole($strConsole)
    {
        $aConsoles = array("xbox" => 1, "ps" => 2, "xb" => 1, "xb1" => 1, "psn" => 2, "playstation" => 2, "ps4" => 2, "pc" => 4, "bnet" => 4);
        $this->defaultConsole = $aConsoles[$strConsole] ?? 1;
    }

    /**
     * @param $strProvider
     */
    public function setPlatform($strProvider)
    {
        $aProviders = array('youtube', 'twitch', 'discord', 'slack', 'telegram');
        if(!in_array(strtolower(trim($strProvider)), $aProviders)) $strProvider = 'twitch';
        $this->platform = strtolower(trim($strProvider));
    }
}
?>