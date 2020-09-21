<?php

class TeamException extends Exception
{
   //protected $message = 'You have reached the max limit of team members';

   public static function fromTooManyMembers()
   {
       return 'You have reached the max limit of team members.';
   }
}

class Member
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

class Team
{
    protected $members = [];

    public function add(Member $member)
    {
        if (count($this->members) === 3) {
            throw new TeamException('You have reached the max limit of team members');
            //throw new TeamException;

            // throw TeamException::fromTooManyMembers();
        }

        $this->members[] = $member;
    }

    public function members()
    {
        return $this->members;
    }
}

class TeamMembersController
{
    public function store()
    {
        $team = new Team();

        $team->add(new Member('MH'));
        $team->add(new Member('MHH'));
        $team->add(new Member('MHHH'));
        $team->add(new Member('MHHHH'));

        var_dump($team->members());

        // try {
        //     $team->add(new Member('MH'));
        //     $team->add(new Member('MHH'));
        //     $team->add(new Member('MHHH'));
        //     $team->add(new Member('MHHHH'));
        // } catch (TeamException $e) {
        //     var_dump($e);
        // }
    }
}

(new TeamMembersController())->store();

