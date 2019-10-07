<?php

namespace App\Entity;

interface TrainingEntryInterface
{
    /**
     * @return int
     */
    public function getEmployeeId(): int;

    /**
     * @return string
     */
    public function getEmployeeName(): string;

    /**
     * @return string
     */
    public function getAttendedAtDate(): string;

    /**
     * @return int
     */
    public function getScore(): int;

    /**
     * @return string
     */
    public function getGrade(): string;

    /**
     * @param int $id
     *
     * @return void
     */
    public function setEmployeeId(int $id): void;

    /**
     * @param string $name
     *
     * @return void
     */
    public function setEmployeeName(string $name): void;

    /**
     * @param string $date
     *
     * @return void
     */
    public function setAttendedAtDate(string $date): void;

    /**
     * @param int $score
     *
     * @return void
     */
    public function setScore(int $score): void;

    /**
     * @param string $grade
     *
     * @return void
     */
    public function setGrade(string $grade): void;
}
