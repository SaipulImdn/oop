<?php

class programmer {
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class Backendprogrammer extends programmer {

}

class Frontendprogrammer extends programmer {

}

class company {
    public programmer $programmer;
}