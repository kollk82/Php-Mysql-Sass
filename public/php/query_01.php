<?php $page = 'table'; include 'header.php' ?>
<section>
    <main id="main-human_res">
        <div class="human_res">
        <h1>Employees salary greater than 150000£ / year</h1>
            <?php include '../../private/human_resources_db/display-salary.php' ?>
        </div>
    </main>
</section>
<?php include 'footer.php' ?>
    