<h2><?= $message ?? ''; ?></h2>

<div class="container">
    <form class="needs-validation" novalidate="">
        <div class="row g-7 d-flex justify-content-center my-5">
            <div class="col-md-3">
                <label for="country" class="form-label">Подразделения</label>
                <select class="form-select" id="subunit" required="">
                    <?php
                    foreach ($subunits as $subunit) {
                        echo '<option value="' . $subunit->id . '">' . $subunit->id . ' - ' . $subunit->title . '</option>';
                    }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Please select a valid subdivision.
                </div>
            </div>

            <div class="col-md-3">
                <label for="state" class="form-label">Помещения</label>
                <select class="form-select" id="room" required="">
                    <?php
                    foreach ($rooms as $room) {
                        echo '<option value="' . $room->id . '">' . $room->id . ' - ' . $room->title . '</option>';
                    }
                    ?>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid room.
                </div>
            </div>
            <div class="col-md-2 d-flex justify-content-start align-items-end">
                <button style="height: 37px; font-size: 17px; padding-top: 5px;" class="w-100 btn btn-success btn-lg"
                        type="submit">Применить
                </button>
            </div>
        </div>
    </form>
</div>

<div class="container">
    <div class="col-md-4 my-5">
        <div class="input-group">
            <p class="form-control">Количество абонентов по подразделениям: </p>
            <span class="input-group-text h-50">0</span>
        </div>
        <div class="input-group">
            <p class="form-control">Количество абонентов по помещениям: </p>
            <span class="input-group-text h-50">0</span>
        </div>
    </div>
</div>
<?php
if (app()->auth::check() && app()->auth::user()->name === 'admin'):
    ?>
    <div class="container">
        <div class="d-flex justify-content-center mt-5">
            <a href="subscriber_add" class="btn btn-lg btn-outline-success">Добавить абонента</a>
        </div>
    </div>
<?php
endif;
?>


<div class="container">
    <div class="w3-padding w3-white notranslate py-5">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead class="table-dark table-borderless">
                <tr>
                    <th>#</th>
                    <th>Фамилия</th>
                    <th>Имя</th>
                    <th>Отчество</th>
                    <th>Дата рождения</th>
                    <th>Подразделение</th>
                    <th>Помещение</th>
                    <th>Подробнее</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($subscribers as $subscriber) {
                    echo '<tr>';
                    echo '<td>' . $subscriber->id . '</td>';
                    echo '<td>' . $subscriber->surname . '</td>';
                    echo '<td>' . $subscriber->name . '</td>';
                    echo '<td>' . $subscriber->last_name . '</td>';
                    echo '<td>' . $subscriber->date_of_Birth . '</td>';
                    foreach ($subunits as $subunit) {
                        if ($subunit->id == $subscriber->subunit_id) {
                            echo '<td>' . $subunit->title . '</td>';
                        }
                    }
                    foreach ($rooms as $room) {
                        if ($room->id == $subscriber->room_id) {
                            echo '<td>' . $room->title . '</td>';
                        }
                    }
                    echo '<td><a class="text-success text-decoration-none" href="subscriber?id=' . $subscriber->id . '">Подробнее...<a></td>';
                }
                ?>
                <a href="subscriber?id= "></a>
                </tbody>
            </table>
        </div>
    </div>
</div>