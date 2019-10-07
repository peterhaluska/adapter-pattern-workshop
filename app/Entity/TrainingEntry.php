<?php

namespace App\Entity;

class TrainingEntry implements TrainingEntryInterface
{
    /** @var int */
    private $employeeId;

    /** @var string */
    private $employeeName;

    /** @var string */
    private $attendedAtDate;

    /** @var int */
    private $score;

    /** @var string */
    private $grade;

    /**
     * @return int
     */
    public function getEmployeeId(): int
    {
        return $this->employeeId;
    }

    /**
     * @return string
     */
    public function getEmployeeName(): string
    {
        return $this->employeeName;
    }

    /**
     * @return string
     */
    public function getAttendedAtDate(): string
    {
        return $this->attendedAtDate;
    }

    /**
     * @return int
     */
    public function getScore(): int
    {
        return $this->score;
    }

    /**
     * @return string
     */
    public function getGrade(): string
    {
        return $this->grade;
    }

    /**
     * @param int $id
     *
     * @return void
     */
    public function setEmployeeId(int $id): void
    {
        $this->employeeId = $id;
    }

    /**
     * @param string $name
     *
     * @return void
     */
    public function setEmployeeName(string $name): void
    {
        $this->employeeName = $name;
    }

    /**
     * @param string $date
     *
     * @return void
     */
    public function setAttendedAtDate(string $date): void
    {
        $this->attendedAtDate = $date;
    }

    /**
     * @param int $score
     *
     * @return void
     */
    public function setScore(int $score): void
    {
        $this->score = $score;
    }

    /**
     * @param string $grade
     *
     * @return void
     */
    public function setGrade(string $grade): void
    {
        $this->grade = $grade;
    }
}
