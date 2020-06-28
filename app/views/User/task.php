<h2>Добавить задачу</h2>

<div class="row">
    <div class="col-md-6">
        <form method="post" action="/user/task" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Имя" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="<?=isset($_SESSION['form_data']['email']) ? h($_SESSION['form_data']['email']) : '';?>">
            </div>
            <div class="form-group">
                <label for="task">Task</label>
                <textarea name="task" id="task" class="form-control" cols="30" rows="5" placeholder="Task"></textarea></p>
            </div>
            <div class="form-group">
                <label for="name">Загружаемое изображение:</label>
                <input type="file" name="image" class="form-control" id="image" size="40" placeholder="Имя" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';?>">
            </div>

            <button type="submit" class="btn btn-default">Отправить</button>
        </form>
        <?php if(isset($_SESSION['form_data'])) unset($_SESSION['form_data']) ?>
    </div>
</div>