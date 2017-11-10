<?php
/**
 * Created by PhpStorm.
 * User: JeanClaude
 * Date: 11/7/2017
 * Time: 11:21 AM
 */

class musicMoods extends musicInformation {
    private $colors, $moods;
    private static $size = 0;

    public function __construct($songName, $artist, $link) {
        parent::__construct($songName, $artist, $link);
        $this->colors = array();
        $this->moods = array();
        self::$size++;
    }

    /**
     * @return mixed
     */
    public function getColors() {
        return $this->colors;
    }

    /**
     * @return mixed
     */
    public function getFileName() {
        return $this->fileName;
    }

    /**
     * @return mixed
     */
    public function getMoods() {
        return $this->moods;
    }

    /**
     * @param mixed $colors
     */
    public function setColors($colors) {
        $this->colors = $colors;
    }

    /**
     * @param mixed $moods
     */
    public function setMoods($moods) {
        $this->moods = $moods;
    }

    public function changeMoods($old, $new) {
        if (in_array($this->colors, $old) && !in_array($this->colors, $new)) {
            $this->colors = array_diff($this->colors, array($old));
            array_push($this->colors, $new);
        }else
            throw new Exception('Wrong parameters');
    }

    public function changeColors($old, $new) {
        if (in_array($this->moods, $old) && !in_array($this->moods, $new)) {
            $this->moods = array_diff($this->moods, array($old));
            array_push($this->colors, $new);
        }else
            throw new Exception('Wrong parameters');
    }
}