<?php


class UserManager
{
    protected $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    function add($data) {
        $dataFile = $this->readFileJson();
        array_push($dataFile, $data);
        $this->saveFile($dataFile);
    }

    function readFileJson() {
        $dataJson = file_get_contents($this->filePath);
        return json_decode($dataJson);
    }

    function saveFile($data) {
        $dataJson = json_encode($data);
        file_put_contents($this->filePath, $dataJson);
    }

    function getAll() {
        return $this->readFileJson();
    }
}