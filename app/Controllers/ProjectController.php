<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProjectController extends BaseController
{
    protected $projectModel;

    public function __construct()
    {
        $this->projectModel = new \App\Models\ProjectModel;
    }
    public function index()
    {
        $data = [
            'projects' => $this->projectModel->findAll()
        ];

        return view('pages/projects/index', $data);
    }

    public function create()
    {
        $project_name = $this->request->getPost('project_name');
        $manager_id = $this->request->getPost('manager_id');
        $user_id = $this->request->getPost('user_id');
        $start_date = $this->request->getPost('start_date');
        $finish_date = $this->request->getPost('finish_date');
        $description = $this->request->getPost('description');

        $data = [
            'project_name' => $project_name,
            'manager_id' => $manager_id,
            'user_id' => $user_id,
            'start_date' => $start_date,
            'finish_date' => $finish_date,
            'description' => $description
        ];

        if ($this->projectModel->save($data)) {
            return redirect()->to('/projects')->with('success', 'Project created successfully');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->projectModel->errors());
        }
    }

    public function edit($id)
    {
        $project_name = $this->request->getPost('project_name');
        $manager_id = $this->request->getPost('manager_id');
        $user_id = $this->request->getPost('user_id');
        $start_date = $this->request->getPost('start_date');
        $finish_date = $this->request->getPost('finish_date');
        $description = $this->request->getPost('description');
        $status = $this->request->getPost('status');

        $data = [
            'id' => $id,
            'project_name' => $project_name,
            'manager_id' => $manager_id,
            'user_id' => $user_id,
            'start_date' => $start_date,
            'finish_date' => $finish_date,
            'description' => $description,
            'status' => $status
        ];

        if ($this->projectModel->save($data)) {
            return redirect()->to('/projects')->with('success', 'Project updated successfully');
        } else {
            return redirect()->back()->withInput()->with('errors', $this->projectModel->errors());
        }
    }
    public function delete($id)
    {
        if ($this->projectModel->delete($id)) {
            return redirect()->to('/projects')->with('success', 'Project deleted successfully');
        } else {
            return redirect()->to('/projects')->with('errors', 'Project not found');
        }
    }
}