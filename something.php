<?php
    include_once 'header.php';
?>

<section class="back-container flex center">
<p class="abs z1m grid5"> This section is exclusively for Micheale Morreale to update her portfolio. Please make no attempts to log in to the interface panel and redirect back to the main site by clicking 'Back'.</p>
        <?php
            if (isset($_SESSION['u_id'])) {
                include_once "interface.php";
            }
        ?>
</section>

<?php
    include_once 'footer.php';
?>
 