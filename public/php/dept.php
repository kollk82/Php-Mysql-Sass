<?php $page = 'dept'; include 'header.php' ?>
    <section>
        <main id="main-human_res">
            <div class="human_res">
                <h1>Click<a id="hide-table" href="javascript:void(0);">&nbsp;here&nbsp;</a>to see Departments</h1>
                <h1>Click<a href="display-table.php">&nbsp;here&nbsp;</a>to search for employee details</h1>
                <div id="show-table">
                    <?php include '../../private/human_resources_db/display-table.php' ?>
                </div>               
            </div>
        </main>
    </section>
<?php include 'footer.php' ?>