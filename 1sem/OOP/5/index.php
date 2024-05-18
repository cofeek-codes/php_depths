<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

class Student
{
    public int      $id;
    public string   $name;
    public string   $adress;
    public string   $phone;
    public string   $profession;
    public int      $course;
    public DateTime $birthDate;

    public function __construct(string $name, string $adress, string $phone, string $profession, int $course, DateTime $birthDate)
    {
        $this->id = rand(1, 1000);
        $this->name = $name;
        $this->adress = $adress;
        $this->phone = $phone;
        $this->profession = $profession;
        $this->course = $course;
        $this->birthDate = $birthDate;
    }
}

$students = [
    new Student("Щеглова Виктория Игоревна", "город Ступино, бульвар 1905 года, 21", "+7-999-99-99", "ИСиП", 1, new DateTime('2005-12-05')),
    new Student("Исаев Александр Дмитриевич", "город Шатура, пл. Гагарина, 63", "+7-888-88-88", "МДК", 2, new DateTime('2004-05-11')),
    new Student("Шульгин Даниил Богданович", "город Щёлково, пер. Ленина, 94", "+7-888-88-88", "МДК", 4, new DateTime('2002-01-23')),
    new Student("Новикова Анастасия Никитична", "город Домодедово, пл. Ладыгина, 68", "+7-481-32-49", "ОМД", 1, new DateTime('2002-01-23')),
    new Student("Филиппова Полина Максимовна", "город Наро-Фоминск, шоссе Домодедовская, 24", "+7-482-21-78", "ОМД", 3, new DateTime('2003-05-14')),


];

function getStudentsByProfession(array $students, string $profession)
{
    return array_filter($students, fn ($s) => $s->profession == $profession);
}

function printAllStudents(array $students)
{
    foreach ($students as $s) {
        print_r($s);
    }
}

function getAllStudentsAfterYear(array $students, DateTime $date)
{
    return array_filter($students, fn ($s) => $s->birthDate < $date);
}


function getGroupList(array $students, string $profession, int $course)
{
    return array_filter($students, fn ($s) => $s->profession == $profession && $s->course == $course);
}

// print_r(getStudentsByProfession($students, "МДК"));

// printAllStudents($students);

// print_r(getAllStudentsAfterYear($students, new DateTime('2001')));

print_r(getGroupList($students, "ИСиП", 1));
