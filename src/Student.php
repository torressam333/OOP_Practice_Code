<?php

namespace App;

class Student
{
    //Student Id
    private $id;

    private $name, $result, $remark, $grade, $avg, $total;
    private $sub1, $sub2, $sub3, $sub4, $sub5;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setMarks(float $sub1, float $sub2, float $sub3, float $sub4, float $sub5)
    {
        $this->sub1 = $sub1;
        $this->sub2 = $sub2;
        $this->sub3 = $sub3;
        $this->sub4 = $sub4;
        $this->sub5 = $sub5;
    }

    public function totalScore(): float
    {
        return $this->total = $this->sub1 + $this->sub2 + $this->sub3 + $this->sub4 + $this->sub5;
    }

    public function averageScore() : float
    {
        return $this->avg = $this->total / 5;
    }

    public function getGrade() : string
    {
        if($this->avg >= 89.9 && $this->avg <= 100) return $this->grade = "A";

        if($this->avg >= 79.9 && $this->avg <= 89.8) return $this->grade = "B";

        if($this->avg >= 69.9 && $this->avg <= 79.8) return $this->grade = "C";

        if($this->avg >= 59.9 && $this->avg <= 69.8) return $this->grade = "D";

        if($this->avg <= 59.8) return $this->grade = "F";

        return $this->grade = 'unknown';
    }

    public function getRemark(): string
    {
        switch ($this->grade){
            case 'A':
                $this->remark = 'Excellent';
                break;
            case 'B':
                $this->remark = 'Very Good';
                break;
            case 'C':
                $this->remark = 'Good';
                break;
            case 'D':
                $this->remark = 'Fair';
                break;
            default:
                $this->remark = 'Very Poor';
        }
        
        return $this->remark;
    }

    public function finalResult(): string
    {
        if($this->sub1 < 59.9 || $this->sub2 < 59.9 || $this->sub3 < 59.9 || $this->sub4 < 59.9 || $this->sub5 < 59.9){
            $this->result = 'Fail';
        }else{
            $this->result = 'Pass';
        }
        return $this->result;
    }
}
