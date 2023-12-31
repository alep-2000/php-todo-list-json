<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>PHP ToDo List JSON</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">TODO-LIST</h1>
                    <ul class="text-center list-unstyled">
                        <li v-for="(task,index) in taskList" :key="index">
                            {{task.text}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="input-group">
                        <input type="text" class="form-control me-3 rounded" placeholder="New Task" @keyup.enter="addToList" v-model="taskToDo">
                        <button @click="addToList" class="btn btn-sm btn-success rounded">New Task Todo</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./js/script.js"></script>
</body>
</html>