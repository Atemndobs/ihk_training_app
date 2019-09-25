<form action="../index.php" method="post" id="wizard">
    <!-- SECTION 1 -->
    <h2></h2>
    <section>
        <div class="form-header">
            <h3>Results Situation 1</h3>
        </div>
        <p>Situation 1</p>

        <?php
        require 'results1.php'
        ?>
    </section>
    <!-- SECTION 2 -->
    <h2></h2>
    <section>
        <div class="form-header">
            <h3>Results Situation 2</h3>
        </div>
        <p>Situation 2</p>
        <?php
        require 'results2.php'
        ?>
    </section>
    <!-- SECTION 3 -->
    <h2></h2>
    <section>
        <div class="form-header">
            <h3>Results Situation 3</h3>
        </div>
        <p>Situation 3</p>

        <?php
        require 'results3.php'
        ?>

    </section>
    <!-- SECTION 4-->
    <h2></h2>
    <section>
        <div class="form-header">
            <h3>Results Situation 4</h3>
        </div>
        <p>Situation 4</p>
        <?php
        require 'results4.php'
        ?>
    </section>
    <!-- SECTION 4-->
    <h2></h2>
    <section>
        <div class="form-header">
            <h3>Final Results</h3>
        </div>
        <p>  Results  </p>
        <?php
        require 'results_fin.php'
        ?>
    </section>



</form>