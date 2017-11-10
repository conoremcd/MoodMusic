<?php
/**
 * Created by PhpStorm.
 * User: JeanClaude
 * Date: 11/7/2017
 * Time: 12:24 PM
 */

class musicInformation {
    private $songName;
    private $artist;
    private $link;

    public function __construct($songName, $artist, $link) {
        $this->songName = $songName;
        $this->artist = $artist;
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @return mixed
     */
    public function getSongName()
    {
        return $this->songName;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

}