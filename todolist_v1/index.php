<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todolist V1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>

    <main class="container">
        <article>
            <hgroup class="text-center">
                <h1>Todolist</h1>
                <p>Simpan idemu di sini</p>
            </hgroup> 
            
            <form action="" method="post">
                <fieldset role="group">
                    <input type="text" name="todo-text" placeholder="Tulis rencanamu . . ." maxlength="100" required>
                    <input type="submit" name="submit" value="Simpan">
                </fieldset>
                <small>Maksimal 100 karakter</small>
            </form>

            <table class="striped">
                <thead>
                    <th>Todo</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Jalan jalan ke Taman Mini</td>
                        <td>
                            <a href=""><i class="bi bi-check-lg"></i></a>
                            <a href=""><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <del>Belajar PHP</del>
                        </td>
                        <td>
                            <a href=""><i class="bi bi-arrow-clockwise"></i></a>
                            <a href=""><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <del>Belajar HTML</del>
                        </td>
                        <td>
                            <a href=""><i class="bi bi-arrow-clockwise"></i></a>
                            <a href=""><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                </tbody>
                <p>Tidak ada rencana apapun di sini! Masukkan rencana barumu!</p>
            </table>

            <footer class="text-center">
                <p>v 1.0.0</p>
                <p>Alhazen Academy</p>
            </footer>
        </article>              
    </main>
    
</body>
</html>