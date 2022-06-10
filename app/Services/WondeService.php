<?php

namespace App\Services;

use App\Exceptions\WondeCannotConnectException;

class WondeService
{
    public $client = null;
    public $school = null;

    public function __construct()
    {
        $this->client = new \Wonde\Client(config('wonde.token'));
        $this->school = $this->client->school(config('wonde.school_id'));
    }

    public function getEmployees()
    {
        return $this->school->employees->all(
            [], 
            ['has_class' => true]
        );
    }

    public function getEmployeeWithClasses($id)
    {
        return $this->school->employees->get($id, ['classes']);
    }

    public function getClassWithStudents($id)
    {
        return $this->school->classes->get($id, ['students', 'lessons.period']);
    }
}