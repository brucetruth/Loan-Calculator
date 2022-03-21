<?php


class Calc
{

    /**
     * @var int
     */
    private $value = 0;
    /**
     * @var int|mixed
     */
    private $rate;
    /**
     * @var int
     */
    private $months = 1;

    /**
     * @var string[]
     */
    protected $response = [
        'message' => '',
        'status' => '',
        'value' => '',
        'amount' => 0
    ];


    /**
     * Calc constructor.
     */
    public function __construct($rate = null)
    {
        $this->rate = isset($rate) ? $rate : 10;
    }

    public function process($value, $month){

        if(!is_numeric($value) || !is_numeric($month)){
            $this->response['message'] = 'values provided are not numeric';
            $this->response['status'] = false;
            return $this->response;
        }

        $this->value = $value;
        $this->months = $month;

        if($this->value <=0  || $this->months <= 0){
            $this->response['message'] = 'values is less than 1';
            $this->response['status'] = false;
            return $this->response;
        }
        $v = (($this->rate / 100) * $this->value)*$this->months;

        $this->response['value'] = $v;

        $this->response['message'] = 'Done, kindly find the amount to repay in '.$this->months.' months. ';
        $this->response['status'] = true;
        $this->response['amount'] = $value + $v;

    }

    /**
     * @return string[]
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return int|mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }


}