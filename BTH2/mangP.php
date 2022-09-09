<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .content{
        border: 2px solid black;
        width: 500px;
        height: auto;
        text-align: center;
        margin: 100px auto;
        padding: 10px;
    }
</style>
<body>
    <did class="content">


    <?php
    $group = array("1" =>"Admin" ,"2" =>"Adggggmin","3" =>"ádAdmin");
      function FunctionName($name ,$attributes,$array,$keySelector )
     {
        $xhtml ='';
        if(!empty($array)){
            $xhtml .=  '<select name="'.$name.'" id="'.$name.'" style="'.$attributes.'">';
            foreach($array as $key => $value){
                if($key == $keySelector){
                    $xhtml .=   '<option value="'.$key.'" selected="selected">'.$value.'</option>';

                }else{
                    $xhtml .= '<option value="'.$key.'">'.$value.'</option>';
                }

            }
            $xhtml.='</select>';
        }
        return $xhtml;

     }
     $groupsss=FunctionName("group",'width:200px',$group,2);
  echo $groupsss;
    ?>
 </did>
</body>
</html>