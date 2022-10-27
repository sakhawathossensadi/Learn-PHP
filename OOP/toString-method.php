<?php

//__toString() called when we trying to print object as string
class Test
{
    public function __toString()
    {
        return "Can't print object as a string of class : " . get_class($this);
    }
}

$obj = new Test();
echo $obj;
