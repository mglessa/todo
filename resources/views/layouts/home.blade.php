<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    <link rel="stylesheet" href="/assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="siderbar">
            <div class="logo-img">
                <img src="/assets/images/logo.png" alt="">
            </div>
        </div>
        <div class="content">
            <nav>
                <a href="#" class='btn btn-primary'>Criar Tarefa</a>
            </nav>
            <main>
                <section class="graph">
                    <div class="graph_header">
                        <h2>Progresso do dia</h2>
                        <div class="line_decorator"></div>
                        <div class="graph_data">
                            <img src="/assets/images/icon-prev.png" alt="">
                            <span>13 de Dez</span>
                            <img src="/assets/images/icon-next.png" alt="">
                        </div>
                    </div>
                    <div class="graph_subtitle">
                        <p>Tarefas: <span>3/6</span></p>
                    </div>

                    <div class="graph_placeholder">
                    </div>

                    <div class="graph-info">
                        <img src="/assets/images/icon-info.png" alt="">
                        Restam 3 tarefas para serem finaliadas.
                    </div>
                </section>
                <section class="list">
                    <div class="list-header">
                        <select name="" id="">
                            <option value="">Todas as tarefas</option>
                        </select>
                    </div>
                    <div class="list-tasks">
                        <div class="task">
                            <input type="checkbox" name="" id="">
                            <p class="title">Fazer tal coisa para fulano</p>
                            <div class="status">
                                <span class="status-decorator"></span>
                                Alta prioridade
                            </div>
                            <div class="task-btns">
                                <img src="/assets/images/icon-edit.png" alt="" title="Editar tarefa">
                                <img src="/assets/images/icon-delete.png" alt="" title="Excluir tarefa">
                            </div>
                        </div>
                        <div class="task">
                            <input type="checkbox" name="" id="">
                            <p class="title">Fazer tal coisa para fulano</p>
                            <div class="status">
                                <span class="status-decorator"></span>
                                Alta prioridade
                            </div>
                            <div class="task-btns">
                                <img src="/assets/images/icon-edit.png" alt="" title="Editar tarefa">
                                <img src="/assets/images/icon-delete.png" alt="" title="Excluir tarefa">
                            </div>
                        </div>
                        <div class="task">
                            <input type="checkbox" name="" id="">
                            <p class="title">Fazer tal coisa para fulano</p>
                            <div class="status">
                                <span class="status-decorator"></span>
                                Alta prioridade
                            </div>
                            <div class="task-btns">
                                <img src="/assets/images/icon-edit.png" alt="" title="Editar tarefa">
                                <img src="/assets/images/icon-delete.png" alt="" title="Excluir tarefa">
                            </div>
                        </div>
                        <div class="task">
                            <input type="checkbox" name="" id="">
                            <p class="title">Fazer tal coisa para fulano</p>
                            <div class="status">
                                <span class="status-decorator"></span>
                                Alta prioridade
                            </div>
                            <div class="task-btns">
                                <img src="/assets/images/icon-edit.png" alt="" title="Editar tarefa">
                                <img src="/assets/images/icon-delete.png" alt="" title="Excluir tarefa">
                            </div>
                        </div>
                        <div class="task">
                            <input type="checkbox" name="" id="">
                            <p class="title">Fazer tal coisa para fulano</p>
                            <div class="status">
                                <span class="status-decorator"></span>
                                Alta prioridade
                            </div>
                            <div class="task-btns">
                                <img src="/assets/images/icon-edit.png" alt="" title="Editar tarefa">
                                <img src="/assets/images/icon-delete.png" alt="" title="Excluir tarefa">
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>
</html>
