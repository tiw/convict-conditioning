<?php

require __DIR__ . "/vendor/autoload.php";

class Exercise
{
    private $_name;
    private $_level;
}


class ExerciseRecorder
{
    private $_exercise;
    private $_count;
    private $_date;
}

class BaseDal
{
    protected $db;

    public function __construct($db)
    {
        $this->db = $db;
    }
}

class ExerciseMapper extends BaseDal
{

    public function save($exercise)
    {
    }
}


class ExerciseRecorderMapper extends BaseDal
{
    public function save($record)
    {
    }
}

class BaseRepository extends BaseDal
{
    public function findInDateInterval($startDate, $endDate)
    {
    }
}
