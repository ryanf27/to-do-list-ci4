<?php namespace App\Controllers;

use App\Models\TasksModel;

 class Tasks extends BaseController{

    public function index(){
        $taskModel = new TasksModel();

        $data['tasks'] = $taskModel->findAll();

        return view('tasks', $data);
        
    }

    public function create() {
        return view('tasks');
    }

    public function store() {
        $taskModel = new TasksModel();
    
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
       
    
       
        if (!empty($title)) {
            $data = [
                'title' => $title,
                'description' => $description,
                
            ];
    
            $taskModel->insert($data); 
    
            return redirect()->to('/');
        } else {
           
            return redirect()->to('/')->with('error', 'Title cannot be empty.');
        }
    }
    
    public function delete($id) {
        $taskModel = new TasksModel();

        $taskModel->delete($id);

        return redirect()->to('/');
    }

 }