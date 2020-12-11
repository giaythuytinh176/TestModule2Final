<?php
require_once "./src/views/pages/blocks/header.php";
?>

<style>
    body {
        background: #dedede;
    }

    .page-wrap {
        min-height: 80vh;
    }
</style>

<div class="d-flex justify-content-center align-items-center page-wrap" id="main">
    <h1 class="mr-3 pr-3 align-top border-right inline-block align-content-center">404</h1>
    <div class="inline-block align-middle">
        <h2 class="font-weight-normal lead" id="desc">The page you requested was not found.</h2>
    </div>
</div>

<?php
require_once "./src/views/pages/blocks/footer.php";
?>
