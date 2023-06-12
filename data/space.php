<?php

namespace Data;

class shape {
    public function getCorner()
    {
        return 0;
    }
}

class rectangle extends shape {
public function getCorner()
    {
    return 4;
    }

    public function getparentcorner()
    {
        return parent::getCorner();
    }

}