<main>
    <section id="discContainer"><?php
	foreach ($arr_dischi as $disco) { ?>

        <div class="card">
            <img src="<?= $disco['poster'] ?>" alt="<?= $disco['title'] ?>">
             <div>
                <h2><?= $disco['title'] ?></h2>
                <span><?= $disco['author'] ?></span>
                <span><?= $disco['year'] ?></span>
            </div>
        </div><?php
	} ?>
    </section>
</main>