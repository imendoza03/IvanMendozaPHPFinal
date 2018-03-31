<?php
namespace exercise_4;

class Cat
{
    private $firstName;
    private $age;
    private $color;
    private $sex;
    private $race;
    
    public function  __construct($firstName, $age, $color, $sex, $race) {
        $this->setFirstName($firstName);
        $this->setAge($age);
        $this->setColor($color);
        $this->setSex($sex);
        $this->setRace($race);
    }
    
    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @return mixed
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        if((!is_string($firstName)) && (strlen($firstName) < 3 || strlen($firstName) > 20 )) {
            throw new \Exception;
        }
        
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if(!is_int($age)) {
            throw new \Exception;
        }
        
        $this->age = $age;
        return $this;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        if((!is_string($color)) && (strlen($color) < 3 || strlen($color) > 10 )) {
            throw new \Exception;
        }
        
        $this->color = $color;
        return $this;
    }

    /**
     * @param mixed $sex
     */
    public function setSex($sex)
    {
        if((!is_string($sex)) && (!in_array($sex, ['male', 'female']))) {
            throw new \Exception;
        }
        
        $this->sex = $sex;
        return $this;
    }

    /**
     * @param mixed $race
     */
    public function setRace($race)
    {
        if((!is_string($race)) && (strlen($race) < 3 || strlen($race) > 10 )) {
            throw new \Exception;
        }
        
        $this->race = $race;
        return $this;
    }
    
    public function getInfo() 
    {
        return [
          'FirstName' => $this->firstName,
          'Age' => $this->age,
          'Color' => $this->color,
          'Sex' => $this->sex,
          'Race' => $this->race
        ];
    }
}

