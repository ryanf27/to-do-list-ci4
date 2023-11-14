<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>To-Do List</title>
    
</head>
<body>

  

   
    <nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">To Do List App</span>
    </div>
    </nav>
    <div class="container mt-5">
    
        <form action="/tasks/store" method="post">
            <div class="input-group mb-3">
                <input type="text" name="title" class="form-control" placeholder="Enter a task title..." required>
            </div>
            <div class="input-group mb-3">
                <textarea name="description" class="form-control" placeholder="Enter a task description..." required></textarea>
            </div>
            
            <div class="input-group-append mb-4">
                <button type="submit" class="btn btn-primary">Add Task</button>
            </div>
        </form>

        <!-- Task List -->
        <ul class="list-group">
            
            <?php foreach ($tasks as $task): ?>
                <li class="list-group-item">
                    <div class="d-flex">
                        <div class="mr-auto">
                            <h5><?= esc($task['title']) ?></h5>
                            <p><?= esc($task['description']) ?></p>
                        </div>
                        <div class="mx-2">
                            <a href="/tasks/delete/<?= $task['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
</body>
</html>
