<?php
require_once "./src/views/pages/blocks/header.php";
?>

<style>
    .table thead th {
        background-color: #4e73df !important;
    }
</style>

<div class="col-xl-12 col-lg-12">
    <div class='table-responsive'>
        <table id="TestFinalTLTable" class="table table-striped table-bordered table-hover" cellspacing="0"
               style="width:100%">
            <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sout = '';
            //  \MVCFinalTamLe\controllers\ToolControllers::dd($data);
            if (!empty($data)) {
                foreach ($data as $key => $value) {
                    $sout .= '<tr>
                                <td style="width: 3%">' . ($key + 1) . '</td>
                                <td style="width: 13%">' . $value['ProductName'] . '</td>
                                <td style="width: 13%">' . $value['ProductType'] . '</td>
                                <td style="width: 5%">
                                    <a href="' . \MVCFinalTamLe\controllers\UrlControllers::url("edit/" . $value['ProductID']) . '"><i
                                        class="fas fa-edit" title="Edit Product"></i></a>
                                    
                                    
                                    <a class="remove" title="Remove this item" href="#" data-toggle="modal"
                                       data-target="#deleteCartModal' . $value['ProductID'] . '">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                    <!-- DeleteCart Modal-->
                                    <div class="modal fade" id="deleteCartModal' . $value['ProductID'] . '" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="DeleteCartModal' . $value['ProductID'] . '">Bạn có xoá
                                                        sản
                                                        phẩm này không?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Nếu chọn xoá thì bạn sẽ mất sản phẩm này trong giỏ hàng.</div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                    <a class="btn btn-primary" href="' . \MVCFinalTamLe\controllers\UrlControllers::url("delete/" . $value['ProductID']) . '">Xoá</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                         </tr>';
                }
                echo $sout;
            }

            ?>
            </tbody>
            <tfoot>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Product Type</th>
                <th></th>
            </tr>
            </tfoot>
        </table>
    </div>
</div>

<?php
require_once "./src/views/pages/blocks/footer.php";
?>
