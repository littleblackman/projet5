<?php

require "vendor/autoload.php";
require_once("Manager.php");

class SkillManager extends Manager
{
    public function addSkill($skill, $level)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO skills(skill, level) VALUES(?,?)');
        $affectedLines = $req->execute(array($skill, $level));
        return $affectedLines;
    }

    public function getSkill($skillId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, skill, level FROM skills WHERE id = ?');
        $req->execute(array($skillId));
        $skill = $req->fetch();
        return $skill;
    }

    public function skillEdit ($id, $skill, $level)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE skills SET skill = ?, level = ?  WHERE id = ?');
        $skill = $req->execute(array($id, $skill, $level));
        return $skill;
    }

    public function getSkills()
    {
        $db = $this->dbConnect();
        $skill = $db->query('SELECT id, skill, level FROM skills');
        return $skill;
    }

    public function skillDelete($skillId) {
        $db = $this->dbConnect();
        $skill = $db->prepare("DELETE FROM skills WHERE id=".$skillId);
        $affectedLines = $skill->execute(array($skillId));
        return $affectedLines;
    }
}