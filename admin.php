<?php
$filNavn = basename(__FILE__, '.php');
include("header.php");
?>
<div class="container admin">
    <div class="row">
        <div class="s12 m12 l12">
            <h1>Kontakt Administrator</h1>
            <?php
                if(isset($_POST["logind"]) && $_POST["logind"] == "123456"){
                    hentBeskeder($link);
                } else {
                    ?>
                    <form action="#" method="post" class="adminLogind">
                        <input type="password" name="logind" placeholder="Kodeord">
                        <button>Log ind</button>
                    </form>
                    <?php
                }
            ?>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>