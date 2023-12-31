<?php

namespace core;

class Request
{
    public function getPath()
    {
        $path =  $_SERVER["REQUEST_URI"] ?? "/";
        $position = strpos($path, "?");
        if ($position === false) {
            return $path;
        }
        return substr($path, 0, $position);
    }

    public function method()
    {
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }

    public function isPost()
    {
        return $this->method() === "post";
    }

    public function isGet()
    {
        return $this->method() === "get";
    }

    public function getBody()
    {

        $body = [];

        if ($this->method() === "get") {
            foreach ($_GET as $key => $value) {
                $body[$key] = filter_input(INPUT_GET, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }
        }

        if ($this->method() === "post") {

            $photo = $_FILES["photo"]["name"] === "" ? null : $_FILES["photo"];
   
            if ($photo) {
                $imagen_blob = addslashes(file_get_contents($_FILES["photo"]["tmp_name"])) ?? null;
            }

            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }

            $imagen = $imagen_blob ?? null;
            if ($imagen) {
                $body["photo"] = $imagen_blob;
            }
        }

        return $body;
    }
}
