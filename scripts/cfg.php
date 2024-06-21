<?php
class Config {
    public function __construct(){
        if($this->projectname === "") {
            $this->projectname = "dragonborn";    
        }
        if($this->nameone === "") {
            $this->nameone = "dragonborn";
        }
        if($this->nametwo === "") {
            $this->nametwo = ".lol";
        }
        if($this->apiurl === "") {
            $this->apiurl = "http://api.dragonborn.lol/v1/";
        }
        if($this->siteurl === "") {
            $this->siteurl = "https://dragonborn.lol";
        }
    }

    public $projectname = "";
    public $nameone = "";
    public $nametwo = "";
    public $videourl = "";
    public $apiurl = "";
    public $siteurl = "";
    public $authmode = 1;
}