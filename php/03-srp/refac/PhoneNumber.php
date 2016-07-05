<?php

class PhoneNumber
{

    private $areaCode;
    private $lineNumber;

    public function getAreaCode()
    {
        return $this->areaCode;
    }

    public function getLineNumber()
    {
        return $this->lineNumber;
    }

    public function setAreaCode($areaCode)
    {
        $this->areaCode = $areaCode;
    }

    public function setLineNumber($lineNumber)
    {
        $this->lineNumber = $lineNumber;
    }

}
