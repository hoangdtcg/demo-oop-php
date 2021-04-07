<?php
/**
 *
 * Created by PhpStorm.
 * User: Du Thanh Hoang ( @hoangdt )
 * Date: 4/7/21
 * Time: 4:12 PM
 */

/*
 * This là đại diện cho đối tượng.
 * Self là đại diện cho lớp
 * Static - biến tĩnh - biến của class;
 * Có cả phương thức tĩnh - static method
 */
include 'Data.php';
class Student
{
    private static $count = 0;
    private $id;

    public static function getCount(){
        return self::$count;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * @param mixed $grade
     */
    public function setGrade($grade): void
    {
        $this->grade = $grade;
    }
    private $name;
    private $age;
    private $grade;

    public function __construct($id, $name, $age, $grade)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->grade = $grade;
        self::$count++;
    }


}

$khoi = new Student(1,'khoi',30,'c0221h1');
$khoi = new Student(11,'trong',18,'c0221h1');
$khoi = new Student(2,'Duy',18,'c0221h1');
$khoi->getId();
echo Student::getCount() . ' save in ' . Data::$filename;