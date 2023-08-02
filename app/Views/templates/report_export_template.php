<?php
$result = true;
$comments = '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
<style>
    .black {
        background: black;
        color: white;
    }
    th,td {
        padding: .3rem 1rem;
        border: 1px solid gray;
        text-align: left;

    }
    table {
        border-spacing: 0;
    }
    .text-success {
        color: green;
    }
    .text-danger {
        color: red;
    }
</style>
</head>

<body>
    <table>
        <?php foreach($exportDatas as $key => $data) { ?>
            <tr>
                <th colspan="2" class="black"><?= $key ?></th>
            </tr>
            <?php foreach($data as $key => $param) { 
                $value = $param->input_type == 'boolean' ? ($param->param_value == 1 ? "Active" : "Inactive") : $param->param_value.' '. $param->value_type;
                if($param->from_value && $param->to_value) {
                    if($value < $param->from_value) {
                        $result = false;
                        $comments .= "<strong>".$param->sub_cat_name."</strong> value is lesser then limit (".$param->from_value."), ";
                    } else if($value > $param->to_value) {
                        $result = false;
                        $comments .= "<strong>".$param->sub_cat_name."</strong> value is greater then limit (".$param->to_value."), ";
                    }
                }
            ?>
                <tr>
                    <th><?= $param->sub_cat_name ?></th>
                    <td><?= $value ?></td>
                </tr>
            <?php } ?>

        <?php } ?>
        <tr>
            <th colspan="2" class="black">Batch Analysis</th>
        </tr>
        <tr>
            <th>Results of analysis</th>
            <td><strong><?= $result ? '<span class="text-success">Passed</span>' : '<span class="text-danger">Failed</span>' ?></strong></td>
        </tr>
        <tr>
            <th>Comments</th>
            <td><?= $comments ?></td>
        </tr>
        <tr>
            <th>Certification Statement</th>
            <td></td>
        </tr>
        <tr>
            <th>Name and position/title of person authorizing the batch release</th>
            <td></td>
        </tr>
        <tr>
            <th>Signature of person authorizing the batch release</th>
            <td></td>
        </tr>
        <tr>
            <th>Date of signature</th>
            <td></td>
        </tr>
    </table>
</body>

</html>