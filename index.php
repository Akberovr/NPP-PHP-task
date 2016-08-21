<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3 class="title">Qeydiyyat</h3>
                    <form method="post" action="index.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Adı">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="place" placeholder="Yer adı">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="photos">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-default pull-right" type="submit" value="Yukle" name="upload">
                        </div>
                    </form>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Yükləyən</th>
                                    <th>Yer</th>
                                    <th>Şəkil</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                      <?php
                                          if (isset($_POST['name'])) {
                                            $fname=$_POST['name'];
                                              if (!empty($fname)) {
                                                  echo $fname;
                                              }else {
                                              echo "";
                                             }
                                          }
                                       ?>
                                   </td>
                                     <td>
                                       <?php
                                         if (isset($_POST['place'])) {
                                           $fplace=$_POST['place'];
                                             if (!empty($fplace)) {
                                              echo $fplace;
                                            }else {
                                             echo "";
                                            }
                                         }
                                      ?>
                                    </td>
                                    <td>
                                      <?php
                                        $imagesrc="img/";

                                        if (is_dir($imagesrc)) {
                                          if ($imagesrs=opendir($imagesrc)) {
                                            while ($file=readdir($imagesrs))  {
                                              if ($file=='.' || $file=='..') {

                                                    echo '<img src="img/'.$file.'" width="128">';
                                                    break;
                                                }
                                              closedir($imagesrc);
                                            }
                                          }
                                        }
                                       ?>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
