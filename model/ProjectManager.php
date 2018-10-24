<?php



require_once("Manager.php");

class ProjectManager extends Manager
{
    public function addProject($titleProject, $description, $techno, $image, $link)
    {
        $db = $this->dbConnect();
        $project = $db->prepare('INSERT INTO projects(titleProject, description, techno, image, link) VALUES(?,?,?,?,?)');
        $affectedLines = $project->execute(array($titleProject, $description, $techno, $image, $link));
        return $affectedLines;
    }

    public function getProject($projectId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, titleProject, description, techno, image, link FROM projects WHERE id = ?');
        $req->execute(array($projectId));
        $project = $req->fetch();
        return $project;
    }

    public function projectEdit ($id, $titleProject, $description, $techno, $image, $link)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE projects SET titleProject = ?, description = ? , techno = ? , image = ?, link = ? WHERE id = ?');
        $project = $req->execute(array($id, $titleProject, $description, $techno, $image, $link));
        return $project;
    }

    public function getProjects()
    {
        $db = $this->dbConnect();
        $projects = $db->query('SELECT id, titleProject, description, techno, image, link FROM projects');
        return $projects;
    }
}